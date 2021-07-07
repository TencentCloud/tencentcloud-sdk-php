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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCloudBaseRunServerFlowConf请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getServerName() 获取服务名称
 * @method void setServerName(string $ServerName) 设置服务名称
 * @method array getVersionFlowItems() 获取流量占比
 * @method void setVersionFlowItems(array $VersionFlowItems) 设置流量占比
 * @method string getTrafficType() 获取流量类型（URL_PARAMS / FLOW / HEADERS)
 * @method void setTrafficType(string $TrafficType) 设置流量类型（URL_PARAMS / FLOW / HEADERS)
 * @method string getOperatorRemark() 获取操作备注
 * @method void setOperatorRemark(string $OperatorRemark) 设置操作备注
 */
class ModifyCloudBaseRunServerFlowConfRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 服务名称
     */
    public $ServerName;

    /**
     * @var array 流量占比
     */
    public $VersionFlowItems;

    /**
     * @var string 流量类型（URL_PARAMS / FLOW / HEADERS)
     */
    public $TrafficType;

    /**
     * @var string 操作备注
     */
    public $OperatorRemark;

    /**
     * @param string $EnvId 环境ID
     * @param string $ServerName 服务名称
     * @param array $VersionFlowItems 流量占比
     * @param string $TrafficType 流量类型（URL_PARAMS / FLOW / HEADERS)
     * @param string $OperatorRemark 操作备注
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("VersionFlowItems",$param) and $param["VersionFlowItems"] !== null) {
            $this->VersionFlowItems = [];
            foreach ($param["VersionFlowItems"] as $key => $value){
                $obj = new CloudBaseRunVersionFlowItem();
                $obj->deserialize($value);
                array_push($this->VersionFlowItems, $obj);
            }
        }

        if (array_key_exists("TrafficType",$param) and $param["TrafficType"] !== null) {
            $this->TrafficType = $param["TrafficType"];
        }

        if (array_key_exists("OperatorRemark",$param) and $param["OperatorRemark"] !== null) {
            $this->OperatorRemark = $param["OperatorRemark"];
        }
    }
}
