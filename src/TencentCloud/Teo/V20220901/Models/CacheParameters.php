<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method FollowOrigin getFollowOrigin() 获取缓存遵循源站。不填表示不设置该配置，FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFollowOrigin(FollowOrigin $FollowOrigin) 设置缓存遵循源站。不填表示不设置该配置，FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
 * @method NoCache getNoCache() 获取不缓存。不填表示不设置该配置，FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoCache(NoCache $NoCache) 设置不缓存。不填表示不设置该配置，FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CustomTime getCustomTime() 获取自定义缓存时间。不填表示不设置该配置，FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomTime(CustomTime $CustomTime) 设置自定义缓存时间。不填表示不设置该配置，FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CacheParameters extends AbstractModel
{
    /**
     * @var FollowOrigin 缓存遵循源站。不填表示不设置该配置，FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FollowOrigin;

    /**
     * @var NoCache 不缓存。不填表示不设置该配置，FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoCache;

    /**
     * @var CustomTime 自定义缓存时间。不填表示不设置该配置，FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomTime;

    /**
     * @param FollowOrigin $FollowOrigin 缓存遵循源站。不填表示不设置该配置，FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
     * @param NoCache $NoCache 不缓存。不填表示不设置该配置，FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CustomTime $CustomTime 自定义缓存时间。不填表示不设置该配置，FollowOrigin、NoCache、CustomTime 最多只能配置一个 Switch 为 on。
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
            $this->CustomTime = new CustomTime();
            $this->CustomTime->deserialize($param["CustomTime"]);
        }
    }
}
