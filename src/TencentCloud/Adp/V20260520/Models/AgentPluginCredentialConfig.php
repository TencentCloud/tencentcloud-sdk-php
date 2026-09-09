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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent 插件凭据配置
 *
 * @method integer getAuthValueSource() 获取<p>插件鉴权值来源</p><p>枚举值：</p><ul><li>0： 未指定</li><li>1： 使用插件默认鉴权值，仅 APIKey/AccessKey 支持</li><li>2： 引用凭证</li><li>3： 引用变量</li></ul>
 * @method void setAuthValueSource(integer $AuthValueSource) 设置<p>插件鉴权值来源</p><p>枚举值：</p><ul><li>0： 未指定</li><li>1： 使用插件默认鉴权值，仅 APIKey/AccessKey 支持</li><li>2： 引用凭证</li><li>3： 引用变量</li></ul>
 * @method string getCredentialId() 获取<p>凭证ID</p><p>入参限制：AuthValueSource=2时必填</p>
 * @method void setCredentialId(string $CredentialId) 设置<p>凭证ID</p><p>入参限制：AuthValueSource=2时必填</p>
 * @method array getParamList() 获取<p>参数配置</p>
 * @method void setParamList(array $ParamList) 设置<p>参数配置</p>
 */
class AgentPluginCredentialConfig extends AbstractModel
{
    /**
     * @var integer <p>插件鉴权值来源</p><p>枚举值：</p><ul><li>0： 未指定</li><li>1： 使用插件默认鉴权值，仅 APIKey/AccessKey 支持</li><li>2： 引用凭证</li><li>3： 引用变量</li></ul>
     */
    public $AuthValueSource;

    /**
     * @var string <p>凭证ID</p><p>入参限制：AuthValueSource=2时必填</p>
     */
    public $CredentialId;

    /**
     * @var array <p>参数配置</p>
     */
    public $ParamList;

    /**
     * @param integer $AuthValueSource <p>插件鉴权值来源</p><p>枚举值：</p><ul><li>0： 未指定</li><li>1： 使用插件默认鉴权值，仅 APIKey/AccessKey 支持</li><li>2： 引用凭证</li><li>3： 引用变量</li></ul>
     * @param string $CredentialId <p>凭证ID</p><p>入参限制：AuthValueSource=2时必填</p>
     * @param array $ParamList <p>参数配置</p>
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
        if (array_key_exists("AuthValueSource",$param) and $param["AuthValueSource"] !== null) {
            $this->AuthValueSource = $param["AuthValueSource"];
        }

        if (array_key_exists("CredentialId",$param) and $param["CredentialId"] !== null) {
            $this->CredentialId = $param["CredentialId"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new AgentPluginCredentialParam();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
