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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC防火墙(组)及防火墙实例详情信息
 *
 * @method string getFwGroupId() 获取防火墙(组)ID
 * @method void setFwGroupId(string $FwGroupId) 设置防火墙(组)ID
 * @method string getFwGroupName() 获取防火墙(组)名称
 * @method void setFwGroupName(string $FwGroupName) 设置防火墙(组)名称
 * @method integer getFwSwitchNum() 获取防火墙组涉及到的开关个数
 * @method void setFwSwitchNum(integer $FwSwitchNum) 设置防火墙组涉及到的开关个数
 * @method array getRegionLst() 获取防火墙(组)部署的地域
 * @method void setRegionLst(array $RegionLst) 设置防火墙(组)部署的地域
 * @method integer getMode() 获取模式 1：CCN云联网模式；0：私有网络模式 2: sase 模式 3：ccn 高级模式 4: 私有网络(跨租户单边模式)
 * @method void setMode(integer $Mode) 设置模式 1：CCN云联网模式；0：私有网络模式 2: sase 模式 3：ccn 高级模式 4: 私有网络(跨租户单边模式)
 * @method integer getSwitchMode() 获取防火墙实例的开关模式 1: 单点互通 2: 多点互通 3: 全互通 4: 自定义路由
 * @method void setSwitchMode(integer $SwitchMode) 设置防火墙实例的开关模式 1: 单点互通 2: 多点互通 3: 全互通 4: 自定义路由
 * @method array getFwInstanceLst() 获取VPC防火墙实例卡片信息数组
 * @method void setFwInstanceLst(array $FwInstanceLst) 设置VPC防火墙实例卡片信息数组
 * @method integer getStatus() 获取防火墙(状态) 0：正常 1: 初始化或操作中
 * @method void setStatus(integer $Status) 设置防火墙(状态) 0：正常 1: 初始化或操作中
 * @method string getFwVpcCidr() 获取auto :自动选择
如果为网段，则为用户自定义 192.168.0.0/20 
 * @method void setFwVpcCidr(string $FwVpcCidr) 设置auto :自动选择
如果为网段，则为用户自定义 192.168.0.0/20 
 * @method string getCdcId() 获取cdc专用集群场景时表示部署所属的cdc
 * @method void setCdcId(string $CdcId) 设置cdc专用集群场景时表示部署所属的cdc
 * @method string getCdcName() 获取cdc专用集群场景时表示cdc名称
 * @method void setCdcName(string $CdcName) 设置cdc专用集群场景时表示cdc名称
 * @method string getCrossUserMode() 获取跨租户模式 1管理员 2单边 0 非跨租户
 * @method void setCrossUserMode(string $CrossUserMode) 设置跨租户模式 1管理员 2单边 0 非跨租户
 * @method integer getNeedSwitchCcnOverlap() 获取云联网模式下，当前实例是否需要开启重叠路由开关，1：需要开启，0：不需要开启
 * @method void setNeedSwitchCcnOverlap(integer $NeedSwitchCcnOverlap) 设置云联网模式下，当前实例是否需要开启重叠路由开关，1：需要开启，0：不需要开启
 * @method string getCcnId() 获取云联网模式下，实例关联的云联网id
 * @method void setCcnId(string $CcnId) 设置云联网模式下，实例关联的云联网id
 */
class VpcFwGroupInfo extends AbstractModel
{
    /**
     * @var string 防火墙(组)ID
     */
    public $FwGroupId;

    /**
     * @var string 防火墙(组)名称
     */
    public $FwGroupName;

    /**
     * @var integer 防火墙组涉及到的开关个数
     */
    public $FwSwitchNum;

    /**
     * @var array 防火墙(组)部署的地域
     */
    public $RegionLst;

    /**
     * @var integer 模式 1：CCN云联网模式；0：私有网络模式 2: sase 模式 3：ccn 高级模式 4: 私有网络(跨租户单边模式)
     */
    public $Mode;

    /**
     * @var integer 防火墙实例的开关模式 1: 单点互通 2: 多点互通 3: 全互通 4: 自定义路由
     */
    public $SwitchMode;

    /**
     * @var array VPC防火墙实例卡片信息数组
     */
    public $FwInstanceLst;

    /**
     * @var integer 防火墙(状态) 0：正常 1: 初始化或操作中
     */
    public $Status;

    /**
     * @var string auto :自动选择
如果为网段，则为用户自定义 192.168.0.0/20 
     */
    public $FwVpcCidr;

    /**
     * @var string cdc专用集群场景时表示部署所属的cdc
     */
    public $CdcId;

    /**
     * @var string cdc专用集群场景时表示cdc名称
     */
    public $CdcName;

    /**
     * @var string 跨租户模式 1管理员 2单边 0 非跨租户
     */
    public $CrossUserMode;

    /**
     * @var integer 云联网模式下，当前实例是否需要开启重叠路由开关，1：需要开启，0：不需要开启
     */
    public $NeedSwitchCcnOverlap;

    /**
     * @var string 云联网模式下，实例关联的云联网id
     */
    public $CcnId;

    /**
     * @param string $FwGroupId 防火墙(组)ID
     * @param string $FwGroupName 防火墙(组)名称
     * @param integer $FwSwitchNum 防火墙组涉及到的开关个数
     * @param array $RegionLst 防火墙(组)部署的地域
     * @param integer $Mode 模式 1：CCN云联网模式；0：私有网络模式 2: sase 模式 3：ccn 高级模式 4: 私有网络(跨租户单边模式)
     * @param integer $SwitchMode 防火墙实例的开关模式 1: 单点互通 2: 多点互通 3: 全互通 4: 自定义路由
     * @param array $FwInstanceLst VPC防火墙实例卡片信息数组
     * @param integer $Status 防火墙(状态) 0：正常 1: 初始化或操作中
     * @param string $FwVpcCidr auto :自动选择
如果为网段，则为用户自定义 192.168.0.0/20 
     * @param string $CdcId cdc专用集群场景时表示部署所属的cdc
     * @param string $CdcName cdc专用集群场景时表示cdc名称
     * @param string $CrossUserMode 跨租户模式 1管理员 2单边 0 非跨租户
     * @param integer $NeedSwitchCcnOverlap 云联网模式下，当前实例是否需要开启重叠路由开关，1：需要开启，0：不需要开启
     * @param string $CcnId 云联网模式下，实例关联的云联网id
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
        if (array_key_exists("FwGroupId",$param) and $param["FwGroupId"] !== null) {
            $this->FwGroupId = $param["FwGroupId"];
        }

        if (array_key_exists("FwGroupName",$param) and $param["FwGroupName"] !== null) {
            $this->FwGroupName = $param["FwGroupName"];
        }

        if (array_key_exists("FwSwitchNum",$param) and $param["FwSwitchNum"] !== null) {
            $this->FwSwitchNum = $param["FwSwitchNum"];
        }

        if (array_key_exists("RegionLst",$param) and $param["RegionLst"] !== null) {
            $this->RegionLst = $param["RegionLst"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("SwitchMode",$param) and $param["SwitchMode"] !== null) {
            $this->SwitchMode = $param["SwitchMode"];
        }

        if (array_key_exists("FwInstanceLst",$param) and $param["FwInstanceLst"] !== null) {
            $this->FwInstanceLst = [];
            foreach ($param["FwInstanceLst"] as $key => $value){
                $obj = new VpcFwInstanceInfo();
                $obj->deserialize($value);
                array_push($this->FwInstanceLst, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FwVpcCidr",$param) and $param["FwVpcCidr"] !== null) {
            $this->FwVpcCidr = $param["FwVpcCidr"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("CdcName",$param) and $param["CdcName"] !== null) {
            $this->CdcName = $param["CdcName"];
        }

        if (array_key_exists("CrossUserMode",$param) and $param["CrossUserMode"] !== null) {
            $this->CrossUserMode = $param["CrossUserMode"];
        }

        if (array_key_exists("NeedSwitchCcnOverlap",$param) and $param["NeedSwitchCcnOverlap"] !== null) {
            $this->NeedSwitchCcnOverlap = $param["NeedSwitchCcnOverlap"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }
    }
}
