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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceCount请求参数结构体
 *
 * @method string getApCode() 获取地域码
 * @method void setApCode(string $ApCode) 设置地域码
 * @method string getVpcId() 获取用户VPC实例ID
 * @method void setVpcId(string $VpcId) 设置用户VPC实例ID
 * @method string getResourceId() 获取堡垒机服务ID
 * @method void setResourceId(string $ResourceId) 设置堡垒机服务ID
 * @method integer getKind() 获取资产类型,1-Linux, 2-Windows,3-MySQL,4-SqlServer 不传-全部
 * @method void setKind(integer $Kind) 设置资产类型,1-Linux, 2-Windows,3-MySQL,4-SqlServer 不传-全部
 * @method integer getBindResource() 获取是否绑定服务,1-已绑定, 2-未绑定， 不传-全部
 * @method void setBindResource(integer $BindResource) 设置是否绑定服务,1-已绑定, 2-未绑定， 不传-全部
 */
class DescribeDeviceCountRequest extends AbstractModel
{
    /**
     * @var string 地域码
     */
    public $ApCode;

    /**
     * @var string 用户VPC实例ID
     */
    public $VpcId;

    /**
     * @var string 堡垒机服务ID
     */
    public $ResourceId;

    /**
     * @var integer 资产类型,1-Linux, 2-Windows,3-MySQL,4-SqlServer 不传-全部
     */
    public $Kind;

    /**
     * @var integer 是否绑定服务,1-已绑定, 2-未绑定， 不传-全部
     */
    public $BindResource;

    /**
     * @param string $ApCode 地域码
     * @param string $VpcId 用户VPC实例ID
     * @param string $ResourceId 堡垒机服务ID
     * @param integer $Kind 资产类型,1-Linux, 2-Windows,3-MySQL,4-SqlServer 不传-全部
     * @param integer $BindResource 是否绑定服务,1-已绑定, 2-未绑定， 不传-全部
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
        if (array_key_exists("ApCode",$param) and $param["ApCode"] !== null) {
            $this->ApCode = $param["ApCode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("BindResource",$param) and $param["BindResource"] !== null) {
            $this->BindResource = $param["BindResource"];
        }
    }
}
