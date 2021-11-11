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
 * 正在执行的异步操作
 *
 * @method string getOperationId() 获取操作Id
 * @method void setOperationId(string $OperationId) 设置操作Id
 * @method string getType() 获取操作类型，取值范围：
- LINK_CLUSTERS: 关联集群
- RELINK_CLUSTERS: 重新关联集群
- UNLINK_CLUSTERS: 解关联集群
- INSTALL_MESH: 安装网格
 * @method void setType(string $Type) 设置操作类型，取值范围：
- LINK_CLUSTERS: 关联集群
- RELINK_CLUSTERS: 重新关联集群
- UNLINK_CLUSTERS: 解关联集群
- INSTALL_MESH: 安装网格
 */
class ActiveOperation extends AbstractModel
{
    /**
     * @var string 操作Id
     */
    public $OperationId;

    /**
     * @var string 操作类型，取值范围：
- LINK_CLUSTERS: 关联集群
- RELINK_CLUSTERS: 重新关联集群
- UNLINK_CLUSTERS: 解关联集群
- INSTALL_MESH: 安装网格
     */
    public $Type;

    /**
     * @param string $OperationId 操作Id
     * @param string $Type 操作类型，取值范围：
- LINK_CLUSTERS: 关联集群
- RELINK_CLUSTERS: 重新关联集群
- UNLINK_CLUSTERS: 解关联集群
- INSTALL_MESH: 安装网格
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
        if (array_key_exists("OperationId",$param) and $param["OperationId"] !== null) {
            $this->OperationId = $param["OperationId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
