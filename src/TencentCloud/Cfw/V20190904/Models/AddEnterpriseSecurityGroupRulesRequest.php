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
 * AddEnterpriseSecurityGroupRules请求参数结构体
 *
 * @method array getData() 获取创建规则数据
 * @method void setData(array $Data) 设置创建规则数据
 * @method integer getType() 获取添加类型，0：添加到最后，1：添加到最前；2：中间插入；默认0添加到最后
 * @method void setType(integer $Type) 设置添加类型，0：添加到最后，1：添加到最前；2：中间插入；默认0添加到最后
 * @method string getClientToken() 获取保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。
 * @method void setClientToken(string $ClientToken) 设置保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。
 * @method integer getIsDelay() 获取（IsDelay为老版参数，新版无需输入）是否延迟下发，1则延迟下发，否则立即下发
 * @method void setIsDelay(integer $IsDelay) 设置（IsDelay为老版参数，新版无需输入）是否延迟下发，1则延迟下发，否则立即下发
 * @method string getFrom() 获取来源 默认空 覆盖导入是 batch_import_cover
 * @method void setFrom(string $From) 设置来源 默认空 覆盖导入是 batch_import_cover
 * @method integer getIsUseId() 获取是否复用rule id，1为是，默认不需要
 * @method void setIsUseId(integer $IsUseId) 设置是否复用rule id，1为是，默认不需要
 */
class AddEnterpriseSecurityGroupRulesRequest extends AbstractModel
{
    /**
     * @var array 创建规则数据
     */
    public $Data;

    /**
     * @var integer 添加类型，0：添加到最后，1：添加到最前；2：中间插入；默认0添加到最后
     */
    public $Type;

    /**
     * @var string 保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。
     */
    public $ClientToken;

    /**
     * @var integer （IsDelay为老版参数，新版无需输入）是否延迟下发，1则延迟下发，否则立即下发
     */
    public $IsDelay;

    /**
     * @var string 来源 默认空 覆盖导入是 batch_import_cover
     */
    public $From;

    /**
     * @var integer 是否复用rule id，1为是，默认不需要
     */
    public $IsUseId;

    /**
     * @param array $Data 创建规则数据
     * @param integer $Type 添加类型，0：添加到最后，1：添加到最前；2：中间插入；默认0添加到最后
     * @param string $ClientToken 保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。
     * @param integer $IsDelay （IsDelay为老版参数，新版无需输入）是否延迟下发，1则延迟下发，否则立即下发
     * @param string $From 来源 默认空 覆盖导入是 batch_import_cover
     * @param integer $IsUseId 是否复用rule id，1为是，默认不需要
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SecurityGroupRule();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("IsDelay",$param) and $param["IsDelay"] !== null) {
            $this->IsDelay = $param["IsDelay"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("IsUseId",$param) and $param["IsUseId"] !== null) {
            $this->IsUseId = $param["IsUseId"];
        }
    }
}
