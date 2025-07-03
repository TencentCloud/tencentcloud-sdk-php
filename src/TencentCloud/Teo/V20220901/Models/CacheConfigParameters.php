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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点缓存 TTL 配置参数。
 *
 * @method FollowOrigin getFollowOrigin() 获取遵循源站缓存配置。FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFollowOrigin(FollowOrigin $FollowOrigin) 设置遵循源站缓存配置。FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
 * @method NoCache getNoCache() 获取不缓存配置。FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoCache(NoCache $NoCache) 设置不缓存配置。FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheConfigCustomTime getCustomTime() 获取自定义缓存时间配置。FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomTime(CacheConfigCustomTime $CustomTime) 设置自定义缓存时间配置。FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CacheConfigParameters extends AbstractModel
{
    /**
     * @var FollowOrigin 遵循源站缓存配置。FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FollowOrigin;

    /**
     * @var NoCache 不缓存配置。FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoCache;

    /**
     * @var CacheConfigCustomTime 自定义缓存时间配置。FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomTime;

    /**
     * @param FollowOrigin $FollowOrigin 遵循源站缓存配置。FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
     * @param NoCache $NoCache 不缓存配置。FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheConfigCustomTime $CustomTime 自定义缓存时间配置。FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
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
        if (array_key_exists("FollowOrigin",$param) and $param["FollowOrigin"] !== null) {
            $this->FollowOrigin = new FollowOrigin();
            $this->FollowOrigin->deserialize($param["FollowOrigin"]);
        }

        if (array_key_exists("NoCache",$param) and $param["NoCache"] !== null) {
            $this->NoCache = new NoCache();
            $this->NoCache->deserialize($param["NoCache"]);
        }

        if (array_key_exists("CustomTime",$param) and $param["CustomTime"] !== null) {
            $this->CustomTime = new CacheConfigCustomTime();
            $this->CustomTime->deserialize($param["CustomTime"]);
        }
    }
}
