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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云托管实例的部署记录, 包括扩缩容状态和流量分配情况
 *
 * @method string getDeployId() 获取部署Id
 * @method void setDeployId(string $DeployId) 设置部署Id
 * @method string getDeployTime() 获取部署开始时间
 * @method void setDeployTime(string $DeployTime) 设置部署开始时间
 * @method string getStatus() 获取状态：running/deploying/deploy_failed
 * @method void setStatus(string $Status) 设置状态：running/deploying/deploy_failed
 * @method string getRunId() 获取部署运行Id 用户查询部署日志
 * @method void setRunId(string $RunId) 设置部署运行Id 用户查询部署日志
 * @method integer getBuildId() 获取构建Id
 * @method void setBuildId(integer $BuildId) 设置构建Id
 * @method integer getFlowRatio() 获取流量比例
 * @method void setFlowRatio(integer $FlowRatio) 设置流量比例
 * @method string getImageUrl() 获取镜像url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageUrl(string $ImageUrl) 设置镜像url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScaleStatus() 获取缩容状态 缩容为 zero 否则为空
 * @method void setScaleStatus(string $ScaleStatus) 设置缩容状态 缩容为 zero 否则为空
 * @method boolean getHasTraffic() 获取是否分配流量
 * @method void setHasTraffic(boolean $HasTraffic) 设置是否分配流量
 * @method string getTrafficType() 获取流量分配方式, FLOW: 百分比分配; URL_PARAMS: 匹配 query 参数; HEADERS: 匹配请求 Header
 * @method void setTrafficType(string $TrafficType) 设置流量分配方式, FLOW: 百分比分配; URL_PARAMS: 匹配 query 参数; HEADERS: 匹配请求 Header
 * @method boolean getIsReleasing() 获取当前版本是否在发布中
 * @method void setIsReleasing(boolean $IsReleasing) 设置当前版本是否在发布中
 */
class DeployRecord extends AbstractModel
{
    /**
     * @var string 部署Id
     */
    public $DeployId;

    /**
     * @var string 部署开始时间
     */
    public $DeployTime;

    /**
     * @var string 状态：running/deploying/deploy_failed
     */
    public $Status;

    /**
     * @var string 部署运行Id 用户查询部署日志
     */
    public $RunId;

    /**
     * @var integer 构建Id
     */
    public $BuildId;

    /**
     * @var integer 流量比例
     */
    public $FlowRatio;

    /**
     * @var string 镜像url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageUrl;

    /**
     * @var string 缩容状态 缩容为 zero 否则为空
     */
    public $ScaleStatus;

    /**
     * @var boolean 是否分配流量
     */
    public $HasTraffic;

    /**
     * @var string 流量分配方式, FLOW: 百分比分配; URL_PARAMS: 匹配 query 参数; HEADERS: 匹配请求 Header
     */
    public $TrafficType;

    /**
     * @var boolean 当前版本是否在发布中
     */
    public $IsReleasing;

    /**
     * @param string $DeployId 部署Id
     * @param string $DeployTime 部署开始时间
     * @param string $Status 状态：running/deploying/deploy_failed
     * @param string $RunId 部署运行Id 用户查询部署日志
     * @param integer $BuildId 构建Id
     * @param integer $FlowRatio 流量比例
     * @param string $ImageUrl 镜像url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScaleStatus 缩容状态 缩容为 zero 否则为空
     * @param boolean $HasTraffic 是否分配流量
     * @param string $TrafficType 流量分配方式, FLOW: 百分比分配; URL_PARAMS: 匹配 query 参数; HEADERS: 匹配请求 Header
     * @param boolean $IsReleasing 当前版本是否在发布中
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
        if (array_key_exists("DeployId",$param) and $param["DeployId"] !== null) {
            $this->DeployId = $param["DeployId"];
        }

        if (array_key_exists("DeployTime",$param) and $param["DeployTime"] !== null) {
            $this->DeployTime = $param["DeployTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RunId",$param) and $param["RunId"] !== null) {
            $this->RunId = $param["RunId"];
        }

        if (array_key_exists("BuildId",$param) and $param["BuildId"] !== null) {
            $this->BuildId = $param["BuildId"];
        }

        if (array_key_exists("FlowRatio",$param) and $param["FlowRatio"] !== null) {
            $this->FlowRatio = $param["FlowRatio"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ScaleStatus",$param) and $param["ScaleStatus"] !== null) {
            $this->ScaleStatus = $param["ScaleStatus"];
        }

        if (array_key_exists("HasTraffic",$param) and $param["HasTraffic"] !== null) {
            $this->HasTraffic = $param["HasTraffic"];
        }

        if (array_key_exists("TrafficType",$param) and $param["TrafficType"] !== null) {
            $this->TrafficType = $param["TrafficType"];
        }

        if (array_key_exists("IsReleasing",$param) and $param["IsReleasing"] !== null) {
            $this->IsReleasing = $param["IsReleasing"];
        }
    }
}
