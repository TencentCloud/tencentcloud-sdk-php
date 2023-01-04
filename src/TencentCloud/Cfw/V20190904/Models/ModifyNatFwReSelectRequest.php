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
 * ModifyNatFwReSelect请求参数结构体
 *
 * @method integer getMode() 获取模式 1：接入模式；0：新增模式
 * @method void setMode(integer $Mode) 设置模式 1：接入模式；0：新增模式
 * @method string getCfwInstance() 获取防火墙实例id
 * @method void setCfwInstance(string $CfwInstance) 设置防火墙实例id
 * @method array getNatGwList() 获取接入模式重新接入的nat网关列表，其中NatGwList和VpcList只能传递一个。
 * @method void setNatGwList(array $NatGwList) 设置接入模式重新接入的nat网关列表，其中NatGwList和VpcList只能传递一个。
 * @method array getVpcList() 获取新增模式重新接入的vpc列表，其中NatGwList和NatgwList只能传递一个。
 * @method void setVpcList(array $VpcList) 设置新增模式重新接入的vpc列表，其中NatGwList和NatgwList只能传递一个。
 * @method FwCidrInfo getFwCidrInfo() 获取指定防火墙使用网段信息
 * @method void setFwCidrInfo(FwCidrInfo $FwCidrInfo) 设置指定防火墙使用网段信息
 */
class ModifyNatFwReSelectRequest extends AbstractModel
{
    /**
     * @var integer 模式 1：接入模式；0：新增模式
     */
    public $Mode;

    /**
     * @var string 防火墙实例id
     */
    public $CfwInstance;

    /**
     * @var array 接入模式重新接入的nat网关列表，其中NatGwList和VpcList只能传递一个。
     */
    public $NatGwList;

    /**
     * @var array 新增模式重新接入的vpc列表，其中NatGwList和NatgwList只能传递一个。
     */
    public $VpcList;

    /**
     * @var FwCidrInfo 指定防火墙使用网段信息
     */
    public $FwCidrInfo;

    /**
     * @param integer $Mode 模式 1：接入模式；0：新增模式
     * @param string $CfwInstance 防火墙实例id
     * @param array $NatGwList 接入模式重新接入的nat网关列表，其中NatGwList和VpcList只能传递一个。
     * @param array $VpcList 新增模式重新接入的vpc列表，其中NatGwList和NatgwList只能传递一个。
     * @param FwCidrInfo $FwCidrInfo 指定防火墙使用网段信息
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("CfwInstance",$param) and $param["CfwInstance"] !== null) {
            $this->CfwInstance = $param["CfwInstance"];
        }

        if (array_key_exists("NatGwList",$param) and $param["NatGwList"] !== null) {
            $this->NatGwList = $param["NatGwList"];
        }

        if (array_key_exists("VpcList",$param) and $param["VpcList"] !== null) {
            $this->VpcList = $param["VpcList"];
        }

        if (array_key_exists("FwCidrInfo",$param) and $param["FwCidrInfo"] !== null) {
            $this->FwCidrInfo = new FwCidrInfo();
            $this->FwCidrInfo->deserialize($param["FwCidrInfo"]);
        }
    }
}
