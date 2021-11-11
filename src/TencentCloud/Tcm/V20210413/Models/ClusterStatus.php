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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群状态
 *
 * @method string getLinkState() 获取关联状态，取值范围：
- LINKING: 关联中
- LINKED: 已关联
- UNLINKING: 解关联中
- LINK_FAILED: 关联失败
- UNLINK_FAILED: 解关联失败
 * @method void setLinkState(string $LinkState) 设置关联状态，取值范围：
- LINKING: 关联中
- LINKED: 已关联
- UNLINKING: 解关联中
- LINK_FAILED: 关联失败
- UNLINK_FAILED: 解关联失败
 * @method string getLinkErrorDetail() 获取关联错误详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkErrorDetail(string $LinkErrorDetail) 设置关联错误详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterStatus extends AbstractModel
{
    /**
     * @var string 关联状态，取值范围：
- LINKING: 关联中
- LINKED: 已关联
- UNLINKING: 解关联中
- LINK_FAILED: 关联失败
- UNLINK_FAILED: 解关联失败
     */
    public $LinkState;

    /**
     * @var string 关联错误详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkErrorDetail;

    /**
     * @param string $LinkState 关联状态，取值范围：
- LINKING: 关联中
- LINKED: 已关联
- UNLINKING: 解关联中
- LINK_FAILED: 关联失败
- UNLINK_FAILED: 解关联失败
     * @param string $LinkErrorDetail 关联错误详情
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
        if (array_key_exists("LinkState",$param) and $param["LinkState"] !== null) {
            $this->LinkState = $param["LinkState"];
        }

        if (array_key_exists("LinkErrorDetail",$param) and $param["LinkErrorDetail"] !== null) {
            $this->LinkErrorDetail = $param["LinkErrorDetail"];
        }
    }
}
