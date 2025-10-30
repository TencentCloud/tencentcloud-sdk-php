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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * api请求参数类型
 *
 * @method string getParameterName() 获取参数名称
 * @method void setParameterName(string $ParameterName) 设置参数名称
 * @method string getType() 获取参数类型
 * @method void setType(string $Type) 设置参数类型
 * @method string getLocation() 获取参数位置
 * @method void setLocation(string $Location) 设置参数位置
 * @method array getLabel() 获取数据标签(敏感字段)
 * @method void setLabel(array $Label) 设置数据标签(敏感字段)
 * @method integer getTimestamp() 获取时间戳
 * @method void setTimestamp(integer $Timestamp) 设置时间戳
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method string getSource() 获取来源是请求或者响应
 * @method void setSource(string $Source) 设置来源是请求或者响应
 * @method integer getIsPan() 获取是否需要泛化 ，0表示不需要，1表示需要
 * @method void setIsPan(integer $IsPan) 设置是否需要泛化 ，0表示不需要，1表示需要
 * @method integer getIsAuth() 获取是否鉴权，1表示是，0表示否
 * @method void setIsAuth(integer $IsAuth) 设置是否鉴权，1表示是，0表示否
 */
class ApiParameterType extends AbstractModel
{
    /**
     * @var string 参数名称
     */
    public $ParameterName;

    /**
     * @var string 参数类型
     */
    public $Type;

    /**
     * @var string 参数位置
     */
    public $Location;

    /**
     * @var array 数据标签(敏感字段)
     */
    public $Label;

    /**
     * @var integer 时间戳
     */
    public $Timestamp;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var string 来源是请求或者响应
     */
    public $Source;

    /**
     * @var integer 是否需要泛化 ，0表示不需要，1表示需要
     */
    public $IsPan;

    /**
     * @var integer 是否鉴权，1表示是，0表示否
     */
    public $IsAuth;

    /**
     * @param string $ParameterName 参数名称
     * @param string $Type 参数类型
     * @param string $Location 参数位置
     * @param array $Label 数据标签(敏感字段)
     * @param integer $Timestamp 时间戳
     * @param string $Remark 备注信息
     * @param string $Source 来源是请求或者响应
     * @param integer $IsPan 是否需要泛化 ，0表示不需要，1表示需要
     * @param integer $IsAuth 是否鉴权，1表示是，0表示否
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
        if (array_key_exists("ParameterName",$param) and $param["ParameterName"] !== null) {
            $this->ParameterName = $param["ParameterName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("IsPan",$param) and $param["IsPan"] !== null) {
            $this->IsPan = $param["IsPan"];
        }

        if (array_key_exists("IsAuth",$param) and $param["IsAuth"] !== null) {
            $this->IsAuth = $param["IsAuth"];
        }
    }
}
