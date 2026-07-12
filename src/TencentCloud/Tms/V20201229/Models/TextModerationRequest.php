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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextModeration请求参数结构体
 *
 * @method string getContent() 获取<p>待检测的文本内容，需为UTF-8编码并以Base64格式传入。</p>
 * @method void setContent(string $Content) 设置<p>待检测的文本内容，需为UTF-8编码并以Base64格式传入。</p>
 * @method string getBizType() 获取<p>接口使用的识别策略编号，需在<a href="https://console.cloud.tencent.com/cms/clouds/manage">控制台</a>获取。详细获取方式请参考以下链接：</p><ul><li><strong>内容安全</strong>（详见步骤四：策略配置）：<a href="https://cloud.tencent.com/document/product/1124/37119">点击这里</a></li><li><strong>AI生成识别</strong>（详见服务对接-&gt;方式二）：<a href="https://cloud.tencent.com/document/product/1124/118694">点击这里</a></li></ul>
 * @method void setBizType(string $BizType) 设置<p>接口使用的识别策略编号，需在<a href="https://console.cloud.tencent.com/cms/clouds/manage">控制台</a>获取。详细获取方式请参考以下链接：</p><ul><li><strong>内容安全</strong>（详见步骤四：策略配置）：<a href="https://cloud.tencent.com/document/product/1124/37119">点击这里</a></li><li><strong>AI生成识别</strong>（详见服务对接-&gt;方式二）：<a href="https://cloud.tencent.com/document/product/1124/118694">点击这里</a></li></ul>
 * @method string getDataId() 获取<p>该字段表示您为待检测文本分配的数据ID，作用是方便您对数据进行标识和管理。<br>取值：可由英文字母、数字、四种特殊符号（_，-，@，#）组成，<strong>长度不超过64个字符</strong>。</p>
 * @method void setDataId(string $DataId) 设置<p>该字段表示您为待检测文本分配的数据ID，作用是方便您对数据进行标识和管理。<br>取值：可由英文字母、数字、四种特殊符号（_，-，@，#）组成，<strong>长度不超过64个字符</strong>。</p>
 * @method User getUser() 获取<p>该字段标识用户信息，传入后可增强甄别有违规风险的发布者账号。</p>
 * @method void setUser(User $User) 设置<p>该字段标识用户信息，传入后可增强甄别有违规风险的发布者账号。</p>
 * @method Device getDevice() 获取<p>该字段标识设备信息，传入后可增强甄别有违规风险的发布者设备。</p>
 * @method void setDevice(Device $Device) 设置<p>该字段标识设备信息，传入后可增强甄别有违规风险的发布者设备。</p>
 * @method string getSourceLanguage() 获取<p>Content字段的原始语种，枚举值包括 zh 和 en：</p><ul><li>推荐使用 zh</li><li>en 适用于纯英文内容，耗时较高。若需使用 en，请先通过<a href="https://console.cloud.tencent.com/workorder/category?level1_id=141&amp;level2_id=1287&amp;source=14&amp;data_title=%E6%96%87%E6%9C%AC%E5%86%85%E5%AE%B9%E5%AE%89%E5%85%A8&amp;step=1">反馈工单</a>确认</li></ul>
 * @method void setSourceLanguage(string $SourceLanguage) 设置<p>Content字段的原始语种，枚举值包括 zh 和 en：</p><ul><li>推荐使用 zh</li><li>en 适用于纯英文内容，耗时较高。若需使用 en，请先通过<a href="https://console.cloud.tencent.com/workorder/category?level1_id=141&amp;level2_id=1287&amp;source=14&amp;data_title=%E6%96%87%E6%9C%AC%E5%86%85%E5%AE%B9%E5%AE%89%E5%85%A8&amp;step=1">反馈工单</a>确认</li></ul>
 * @method string getType() 获取<p>服务类型，枚举值包括 TEXT 和 TEXT_AIGC：<br>TEXT：内容安全<br>TEXT_AIGC：AI生成识别</p>
 * @method void setType(string $Type) 设置<p>服务类型，枚举值包括 TEXT 和 TEXT_AIGC：<br>TEXT：内容安全<br>TEXT_AIGC：AI生成识别</p>
 * @method string getSessionId() 获取<p>适用于上下文关联审核场景，若多条文本内容需要联合审核，通过该字段关联会话。</p>
 * @method void setSessionId(string $SessionId) 设置<p>适用于上下文关联审核场景，若多条文本内容需要联合审核，通过该字段关联会话。</p>
 */
class TextModerationRequest extends AbstractModel
{
    /**
     * @var string <p>待检测的文本内容，需为UTF-8编码并以Base64格式传入。</p>
     */
    public $Content;

    /**
     * @var string <p>接口使用的识别策略编号，需在<a href="https://console.cloud.tencent.com/cms/clouds/manage">控制台</a>获取。详细获取方式请参考以下链接：</p><ul><li><strong>内容安全</strong>（详见步骤四：策略配置）：<a href="https://cloud.tencent.com/document/product/1124/37119">点击这里</a></li><li><strong>AI生成识别</strong>（详见服务对接-&gt;方式二）：<a href="https://cloud.tencent.com/document/product/1124/118694">点击这里</a></li></ul>
     */
    public $BizType;

    /**
     * @var string <p>该字段表示您为待检测文本分配的数据ID，作用是方便您对数据进行标识和管理。<br>取值：可由英文字母、数字、四种特殊符号（_，-，@，#）组成，<strong>长度不超过64个字符</strong>。</p>
     */
    public $DataId;

    /**
     * @var User <p>该字段标识用户信息，传入后可增强甄别有违规风险的发布者账号。</p>
     */
    public $User;

    /**
     * @var Device <p>该字段标识设备信息，传入后可增强甄别有违规风险的发布者设备。</p>
     */
    public $Device;

    /**
     * @var string <p>Content字段的原始语种，枚举值包括 zh 和 en：</p><ul><li>推荐使用 zh</li><li>en 适用于纯英文内容，耗时较高。若需使用 en，请先通过<a href="https://console.cloud.tencent.com/workorder/category?level1_id=141&amp;level2_id=1287&amp;source=14&amp;data_title=%E6%96%87%E6%9C%AC%E5%86%85%E5%AE%B9%E5%AE%89%E5%85%A8&amp;step=1">反馈工单</a>确认</li></ul>
     */
    public $SourceLanguage;

    /**
     * @var string <p>服务类型，枚举值包括 TEXT 和 TEXT_AIGC：<br>TEXT：内容安全<br>TEXT_AIGC：AI生成识别</p>
     */
    public $Type;

    /**
     * @var string <p>适用于上下文关联审核场景，若多条文本内容需要联合审核，通过该字段关联会话。</p>
     */
    public $SessionId;

    /**
     * @param string $Content <p>待检测的文本内容，需为UTF-8编码并以Base64格式传入。</p>
     * @param string $BizType <p>接口使用的识别策略编号，需在<a href="https://console.cloud.tencent.com/cms/clouds/manage">控制台</a>获取。详细获取方式请参考以下链接：</p><ul><li><strong>内容安全</strong>（详见步骤四：策略配置）：<a href="https://cloud.tencent.com/document/product/1124/37119">点击这里</a></li><li><strong>AI生成识别</strong>（详见服务对接-&gt;方式二）：<a href="https://cloud.tencent.com/document/product/1124/118694">点击这里</a></li></ul>
     * @param string $DataId <p>该字段表示您为待检测文本分配的数据ID，作用是方便您对数据进行标识和管理。<br>取值：可由英文字母、数字、四种特殊符号（_，-，@，#）组成，<strong>长度不超过64个字符</strong>。</p>
     * @param User $User <p>该字段标识用户信息，传入后可增强甄别有违规风险的发布者账号。</p>
     * @param Device $Device <p>该字段标识设备信息，传入后可增强甄别有违规风险的发布者设备。</p>
     * @param string $SourceLanguage <p>Content字段的原始语种，枚举值包括 zh 和 en：</p><ul><li>推荐使用 zh</li><li>en 适用于纯英文内容，耗时较高。若需使用 en，请先通过<a href="https://console.cloud.tencent.com/workorder/category?level1_id=141&amp;level2_id=1287&amp;source=14&amp;data_title=%E6%96%87%E6%9C%AC%E5%86%85%E5%AE%B9%E5%AE%89%E5%85%A8&amp;step=1">反馈工单</a>确认</li></ul>
     * @param string $Type <p>服务类型，枚举值包括 TEXT 和 TEXT_AIGC：<br>TEXT：内容安全<br>TEXT_AIGC：AI生成识别</p>
     * @param string $SessionId <p>适用于上下文关联审核场景，若多条文本内容需要联合审核，通过该字段关联会话。</p>
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = new User();
            $this->User->deserialize($param["User"]);
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = new Device();
            $this->Device->deserialize($param["Device"]);
        }

        if (array_key_exists("SourceLanguage",$param) and $param["SourceLanguage"] !== null) {
            $this->SourceLanguage = $param["SourceLanguage"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
