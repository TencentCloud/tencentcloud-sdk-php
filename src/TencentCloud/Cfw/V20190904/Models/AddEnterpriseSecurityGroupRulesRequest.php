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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddEnterpriseSecurityGroupRules请求参数结构体
 *
 * @method array getData() 获取<p>创建规则数据</p>
 * @method void setData(array $Data) 设置<p>创建规则数据</p>
 * @method integer getType() 获取<p>添加类型，0：添加到最后，1：添加到最前；2：中间插入；默认0添加到最后</p>
 * @method void setType(integer $Type) 设置<p>添加类型，0：添加到最后，1：添加到最前；2：中间插入；默认0添加到最后</p>
 * @method string getClientToken() 获取<p>保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。</p>
 * @method integer getIsDelay() 获取<p>（IsDelay为老版参数，新版无需输入）是否延迟下发，1则延迟下发，否则立即下发</p>
 * @method void setIsDelay(integer $IsDelay) 设置<p>（IsDelay为老版参数，新版无需输入）是否延迟下发，1则延迟下发，否则立即下发</p>
 * @method string getFrom() 获取<p>来源 默认空 覆盖导入是 batch_import_cover</p>
 * @method void setFrom(string $From) 设置<p>来源 默认空 覆盖导入是 batch_import_cover</p>
 * @method integer getIsUseId() 获取<p>是否复用rule id，1为是，默认不需要</p>
 * @method void setIsUseId(integer $IsUseId) 设置<p>是否复用rule id，1为是，默认不需要</p>
 */
class AddEnterpriseSecurityGroupRulesRequest extends AbstractModel
{
    /**
     * @var array <p>创建规则数据</p>
     */
    public $Data;

    /**
     * @var integer <p>添加类型，0：添加到最后，1：添加到最前；2：中间插入；默认0添加到最后</p>
     */
    public $Type;

    /**
     * @var string <p>保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。</p>
     */
    public $ClientToken;

    /**
     * @var integer <p>（IsDelay为老版参数，新版无需输入）是否延迟下发，1则延迟下发，否则立即下发</p>
     */
    public $IsDelay;

    /**
     * @var string <p>来源 默认空 覆盖导入是 batch_import_cover</p>
     */
    public $From;

    /**
     * @var integer <p>是否复用rule id，1为是，默认不需要</p>
     */
    public $IsUseId;

    /**
     * @param array $Data <p>创建规则数据</p>
     * @param integer $Type <p>添加类型，0：添加到最后，1：添加到最前；2：中间插入；默认0添加到最后</p>
     * @param string $ClientToken <p>保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。</p>
     * @param integer $IsDelay <p>（IsDelay为老版参数，新版无需输入）是否延迟下发，1则延迟下发，否则立即下发</p>
     * @param string $From <p>来源 默认空 覆盖导入是 batch_import_cover</p>
     * @param integer $IsUseId <p>是否复用rule id，1为是，默认不需要</p>
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
