<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路径缓存遵循源站配置
 *
 * @method string getSwitch() 获取路径缓存遵循源站配置开关，取值有：
on：开启
off：关闭
 * @method void setSwitch(string $Switch) 设置路径缓存遵循源站配置开关，取值有：
on：开启
off：关闭
 * @method HeuristicCache getHeuristicCache() 获取启发式缓存配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeuristicCache(HeuristicCache $HeuristicCache) 设置启发式缓存配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginMtimeCheckType() 获取当缓存过期后，是否开启源站 mtime 校验，配置值为equal、since、none 和 null。默认配置值为equal，会校验源站文件的mtime与长度。2024-09-12 18:00 之前创建的域名默认值 null，行为保持不变。
equal：源站响应mtime必须和缓存mtime一致，若mtime值不一致，清除缓存。
since：若源站响应mtime大于缓存mtime，清除缓存。
none： 缓存过期回源重新获取文件mtime和长度后，不会校验源站响应mtime，若源站响应携带Content-Length头部，只有文件大小改变时才会更新缓存；若源站响应不携带Content-Length头部，会更新缓存。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginMtimeCheckType(string $OriginMtimeCheckType) 设置当缓存过期后，是否开启源站 mtime 校验，配置值为equal、since、none 和 null。默认配置值为equal，会校验源站文件的mtime与长度。2024-09-12 18:00 之前创建的域名默认值 null，行为保持不变。
equal：源站响应mtime必须和缓存mtime一致，若mtime值不一致，清除缓存。
since：若源站响应mtime大于缓存mtime，清除缓存。
none： 缓存过期回源重新获取文件mtime和长度后，不会校验源站响应mtime，若源站响应携带Content-Length头部，只有文件大小改变时才会更新缓存；若源站响应不携带Content-Length头部，会更新缓存。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CacheConfigFollowOrigin extends AbstractModel
{
    /**
     * @var string 路径缓存遵循源站配置开关，取值有：
on：开启
off：关闭
     */
    public $Switch;

    /**
     * @var HeuristicCache 启发式缓存配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeuristicCache;

    /**
     * @var string 当缓存过期后，是否开启源站 mtime 校验，配置值为equal、since、none 和 null。默认配置值为equal，会校验源站文件的mtime与长度。2024-09-12 18:00 之前创建的域名默认值 null，行为保持不变。
equal：源站响应mtime必须和缓存mtime一致，若mtime值不一致，清除缓存。
since：若源站响应mtime大于缓存mtime，清除缓存。
none： 缓存过期回源重新获取文件mtime和长度后，不会校验源站响应mtime，若源站响应携带Content-Length头部，只有文件大小改变时才会更新缓存；若源站响应不携带Content-Length头部，会更新缓存。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginMtimeCheckType;

    /**
     * @param string $Switch 路径缓存遵循源站配置开关，取值有：
on：开启
off：关闭
     * @param HeuristicCache $HeuristicCache 启发式缓存配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginMtimeCheckType 当缓存过期后，是否开启源站 mtime 校验，配置值为equal、since、none 和 null。默认配置值为equal，会校验源站文件的mtime与长度。2024-09-12 18:00 之前创建的域名默认值 null，行为保持不变。
equal：源站响应mtime必须和缓存mtime一致，若mtime值不一致，清除缓存。
since：若源站响应mtime大于缓存mtime，清除缓存。
none： 缓存过期回源重新获取文件mtime和长度后，不会校验源站响应mtime，若源站响应携带Content-Length头部，只有文件大小改变时才会更新缓存；若源站响应不携带Content-Length头部，会更新缓存。
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("HeuristicCache",$param) and $param["HeuristicCache"] !== null) {
            $this->HeuristicCache = new HeuristicCache();
            $this->HeuristicCache->deserialize($param["HeuristicCache"]);
        }

        if (array_key_exists("OriginMtimeCheckType",$param) and $param["OriginMtimeCheckType"] !== null) {
            $this->OriginMtimeCheckType = $param["OriginMtimeCheckType"];
        }
    }
}
