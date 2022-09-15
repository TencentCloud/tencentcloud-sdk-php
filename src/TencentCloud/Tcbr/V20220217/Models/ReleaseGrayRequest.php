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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReleaseGray请求参数结构体
 *
 * @method string getEnvId() 获取环境Id
 * @method void setEnvId(string $EnvId) 设置环境Id
 * @method string getServerName() 获取服务名
 * @method void setServerName(string $ServerName) 设置服务名
 * @method string getGrayType() 获取灰度类型
 * @method void setGrayType(string $GrayType) 设置灰度类型
 * @method string getTrafficType() 获取流量类型
 * @method void setTrafficType(string $TrafficType) 设置流量类型
 * @method array getVersionFlowItems() 获取流量策略
 * @method void setVersionFlowItems(array $VersionFlowItems) 设置流量策略
 * @method string getOperatorRemark() 获取操作标识
 * @method void setOperatorRemark(string $OperatorRemark) 设置操作标识
 * @method integer getGrayFlowRatio() 获取流量比例
 * @method void setGrayFlowRatio(integer $GrayFlowRatio) 设置流量比例
 */
class ReleaseGrayRequest extends AbstractModel
{
    /**
     * @var string 环境Id
     */
    public $EnvId;

    /**
     * @var string 服务名
     */
    public $ServerName;

    /**
     * @var string 灰度类型
     */
    public $GrayType;

    /**
     * @var string 流量类型
     */
    public $TrafficType;

    /**
     * @var array 流量策略
     */
    public $VersionFlowItems;

    /**
     * @var string 操作标识
     */
    public $OperatorRemark;

    /**
     * @var integer 流量比例
     */
    public $GrayFlowRatio;

    /**
     * @param string $EnvId 环境Id
     * @param string $ServerName 服务名
     * @param string $GrayType 灰度类型
     * @param string $TrafficType 流量类型
     * @param array $VersionFlowItems 流量策略
     * @param string $OperatorRemark 操作标识
     * @param integer $GrayFlowRatio 流量比例
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

        if (array_key_exists("GrayType",$param) and $param["GrayType"] !== null) {
            $this->GrayType = $param["GrayType"];
        }

        if (array_key_exists("TrafficType",$param) and $param["TrafficType"] !== null) {
            $this->TrafficType = $param["TrafficType"];
        }

        if (array_key_exists("VersionFlowItems",$param) and $param["VersionFlowItems"] !== null) {
            $this->VersionFlowItems = [];
            foreach ($param["VersionFlowItems"] as $key => $value){
                $obj = new VersionFlowInfo();
                $obj->deserialize($value);
                array_push($this->VersionFlowItems, $obj);
            }
        }

        if (array_key_exists("OperatorRemark",$param) and $param["OperatorRemark"] !== null) {
            $this->OperatorRemark = $param["OperatorRemark"];
        }

        if (array_key_exists("GrayFlowRatio",$param) and $param["GrayFlowRatio"] !== null) {
            $this->GrayFlowRatio = $param["GrayFlowRatio"];
        }
    }
}
