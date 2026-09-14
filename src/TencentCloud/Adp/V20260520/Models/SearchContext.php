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
 * 检索请求上下文信息
 *
 * @method integer getCallSource() 获取<p>请求来源<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>CALL_SOURCE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>CALL_SOURCE_RAG</td><td>1</td><td>标准模式</td></tr><tr><td>CALL_SOURCE_WORKFLOW</td><td>2</td><td>工作流</td></tr><tr><td>CALL_SOURCE_PLUGIN</td><td>3</td><td>插件</td></tr><tr><td>CALL_SOURCE_OPENCLAW</td><td>4</td><td>openclaw</td></tr><tr><td>CALL_SOURCE_RECALL_TEST</td><td>5</td><td>召回测试</td></tr><tr><td>CALL_SOURCE_RECALL_TEST_DIFF</td><td>6</td><td>召回测试在对比的场景，同样需要触发检索接口。区别这种case前端不需要更新最新配置。因为对比1，2，3 可能最后保存的是2</td></tr></tbody></table></p>
 * @method void setCallSource(integer $CallSource) 设置<p>请求来源<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>CALL_SOURCE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>CALL_SOURCE_RAG</td><td>1</td><td>标准模式</td></tr><tr><td>CALL_SOURCE_WORKFLOW</td><td>2</td><td>工作流</td></tr><tr><td>CALL_SOURCE_PLUGIN</td><td>3</td><td>插件</td></tr><tr><td>CALL_SOURCE_OPENCLAW</td><td>4</td><td>openclaw</td></tr><tr><td>CALL_SOURCE_RECALL_TEST</td><td>5</td><td>召回测试</td></tr><tr><td>CALL_SOURCE_RECALL_TEST_DIFF</td><td>6</td><td>召回测试在对比的场景，同样需要触发检索接口。区别这种case前端不需要更新最新配置。因为对比1，2，3 可能最后保存的是2</td></tr></tbody></table></p>
 * @method integer getDomain() 获取<p>adp域：1=开发域，2=生产域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>ADP_DOMAIN_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>ADP_DOMAIN_DEV</td><td>1</td><td>开发域</td></tr><tr><td>ADP_DOMAIN_PROD</td><td>2</td><td>生产域</td></tr></tbody></table></p>
 * @method void setDomain(integer $Domain) 设置<p>adp域：1=开发域，2=生产域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>ADP_DOMAIN_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>ADP_DOMAIN_DEV</td><td>1</td><td>开发域</td></tr><tr><td>ADP_DOMAIN_PROD</td><td>2</td><td>生产域</td></tr></tbody></table></p>
 * @method string getVisitorId() 获取<p>访客 ID</p>
 * @method void setVisitorId(string $VisitorId) 设置<p>访客 ID</p>
 */
class SearchContext extends AbstractModel
{
    /**
     * @var integer <p>请求来源<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>CALL_SOURCE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>CALL_SOURCE_RAG</td><td>1</td><td>标准模式</td></tr><tr><td>CALL_SOURCE_WORKFLOW</td><td>2</td><td>工作流</td></tr><tr><td>CALL_SOURCE_PLUGIN</td><td>3</td><td>插件</td></tr><tr><td>CALL_SOURCE_OPENCLAW</td><td>4</td><td>openclaw</td></tr><tr><td>CALL_SOURCE_RECALL_TEST</td><td>5</td><td>召回测试</td></tr><tr><td>CALL_SOURCE_RECALL_TEST_DIFF</td><td>6</td><td>召回测试在对比的场景，同样需要触发检索接口。区别这种case前端不需要更新最新配置。因为对比1，2，3 可能最后保存的是2</td></tr></tbody></table></p>
     */
    public $CallSource;

    /**
     * @var integer <p>adp域：1=开发域，2=生产域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>ADP_DOMAIN_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>ADP_DOMAIN_DEV</td><td>1</td><td>开发域</td></tr><tr><td>ADP_DOMAIN_PROD</td><td>2</td><td>生产域</td></tr></tbody></table></p>
     */
    public $Domain;

    /**
     * @var string <p>访客 ID</p>
     */
    public $VisitorId;

    /**
     * @param integer $CallSource <p>请求来源<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>CALL_SOURCE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>CALL_SOURCE_RAG</td><td>1</td><td>标准模式</td></tr><tr><td>CALL_SOURCE_WORKFLOW</td><td>2</td><td>工作流</td></tr><tr><td>CALL_SOURCE_PLUGIN</td><td>3</td><td>插件</td></tr><tr><td>CALL_SOURCE_OPENCLAW</td><td>4</td><td>openclaw</td></tr><tr><td>CALL_SOURCE_RECALL_TEST</td><td>5</td><td>召回测试</td></tr><tr><td>CALL_SOURCE_RECALL_TEST_DIFF</td><td>6</td><td>召回测试在对比的场景，同样需要触发检索接口。区别这种case前端不需要更新最新配置。因为对比1，2，3 可能最后保存的是2</td></tr></tbody></table></p>
     * @param integer $Domain <p>adp域：1=开发域，2=生产域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>ADP_DOMAIN_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>ADP_DOMAIN_DEV</td><td>1</td><td>开发域</td></tr><tr><td>ADP_DOMAIN_PROD</td><td>2</td><td>生产域</td></tr></tbody></table></p>
     * @param string $VisitorId <p>访客 ID</p>
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
        if (array_key_exists("CallSource",$param) and $param["CallSource"] !== null) {
            $this->CallSource = $param["CallSource"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("VisitorId",$param) and $param["VisitorId"] !== null) {
            $this->VisitorId = $param["VisitorId"];
        }
    }
}
