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
 * @method string getContent() 获取待检测的文本内容，需为UTF-8编码并以Base64格式传入。

 * @method void setContent(string $Content) 设置待检测的文本内容，需为UTF-8编码并以Base64格式传入。

 * @method string getBizType() 获取接口使用的识别策略编号，需在[控制台](https://console.cloud.tencent.com/cms/clouds/manage)获取。详细获取方式请参考以下链接：
- **内容安全**（详见步骤四：策略配置）：[点击这里](https://cloud.tencent.com/document/product/1124/37119)
- **AI生成识别**（详见服务对接->方式二）：[点击这里](https://cloud.tencent.com/document/product/1124/118694)
 * @method void setBizType(string $BizType) 设置接口使用的识别策略编号，需在[控制台](https://console.cloud.tencent.com/cms/clouds/manage)获取。详细获取方式请参考以下链接：
- **内容安全**（详见步骤四：策略配置）：[点击这里](https://cloud.tencent.com/document/product/1124/37119)
- **AI生成识别**（详见服务对接->方式二）：[点击这里](https://cloud.tencent.com/document/product/1124/118694)
 * @method string getDataId() 获取该字段表示您为待检测文本分配的数据ID，作用是方便您对数据进行标识和管理。
取值：可由英文字母、数字、四种特殊符号（_，-，@，#）组成，**长度不超过64个字符**。
 * @method void setDataId(string $DataId) 设置该字段表示您为待检测文本分配的数据ID，作用是方便您对数据进行标识和管理。
取值：可由英文字母、数字、四种特殊符号（_，-，@，#）组成，**长度不超过64个字符**。
 * @method User getUser() 获取该字段标识用户信息，传入后可增强甄别有违规风险的发布者账号。
 * @method void setUser(User $User) 设置该字段标识用户信息，传入后可增强甄别有违规风险的发布者账号。
 * @method Device getDevice() 获取该字段标识设备信息，传入后可增强甄别有违规风险的发布者设备。
 * @method void setDevice(Device $Device) 设置该字段标识设备信息，传入后可增强甄别有违规风险的发布者设备。
 * @method string getSourceLanguage() 获取Content字段的原始语种，枚举值包括 zh 和 en：
- 推荐使用 zh
- en 适用于纯英文内容，耗时较高。若需使用 en，请先通过[反馈工单](https://console.cloud.tencent.com/workorder/category?level1_id=141&level2_id=1287&source=14&data_title=%E6%96%87%E6%9C%AC%E5%86%85%E5%AE%B9%E5%AE%89%E5%85%A8&step=1)确认

 * @method void setSourceLanguage(string $SourceLanguage) 设置Content字段的原始语种，枚举值包括 zh 和 en：
- 推荐使用 zh
- en 适用于纯英文内容，耗时较高。若需使用 en，请先通过[反馈工单](https://console.cloud.tencent.com/workorder/category?level1_id=141&level2_id=1287&source=14&data_title=%E6%96%87%E6%9C%AC%E5%86%85%E5%AE%B9%E5%AE%89%E5%85%A8&step=1)确认

 * @method string getType() 获取服务类型，枚举值包括 TEXT 和 TEXT_AIGC：
TEXT：内容安全
TEXT_AIGC：AI生成识别
 * @method void setType(string $Type) 设置服务类型，枚举值包括 TEXT 和 TEXT_AIGC：
TEXT：内容安全
TEXT_AIGC：AI生成识别
 * @method string getSessionId() 获取适用于上下文关联审核场景，若多条文本内容需要联合审核，通过该字段关联会话。
 * @method void setSessionId(string $SessionId) 设置适用于上下文关联审核场景，若多条文本内容需要联合审核，通过该字段关联会话。
 */
class TextModerationRequest extends AbstractModel
{
    /**
     * @var string 待检测的文本内容，需为UTF-8编码并以Base64格式传入。

     */
    public $Content;

    /**
     * @var string 接口使用的识别策略编号，需在[控制台](https://console.cloud.tencent.com/cms/clouds/manage)获取。详细获取方式请参考以下链接：
- **内容安全**（详见步骤四：策略配置）：[点击这里](https://cloud.tencent.com/document/product/1124/37119)
- **AI生成识别**（详见服务对接->方式二）：[点击这里](https://cloud.tencent.com/document/product/1124/118694)
     */
    public $BizType;

    /**
     * @var string 该字段表示您为待检测文本分配的数据ID，作用是方便您对数据进行标识和管理。
取值：可由英文字母、数字、四种特殊符号（_，-，@，#）组成，**长度不超过64个字符**。
     */
    public $DataId;

    /**
     * @var User 该字段标识用户信息，传入后可增强甄别有违规风险的发布者账号。
     */
    public $User;

    /**
     * @var Device 该字段标识设备信息，传入后可增强甄别有违规风险的发布者设备。
     */
    public $Device;

    /**
     * @var string Content字段的原始语种，枚举值包括 zh 和 en：
- 推荐使用 zh
- en 适用于纯英文内容，耗时较高。若需使用 en，请先通过[反馈工单](https://console.cloud.tencent.com/workorder/category?level1_id=141&level2_id=1287&source=14&data_title=%E6%96%87%E6%9C%AC%E5%86%85%E5%AE%B9%E5%AE%89%E5%85%A8&step=1)确认

     */
    public $SourceLanguage;

    /**
     * @var string 服务类型，枚举值包括 TEXT 和 TEXT_AIGC：
TEXT：内容安全
TEXT_AIGC：AI生成识别
     */
    public $Type;

    /**
     * @var string 适用于上下文关联审核场景，若多条文本内容需要联合审核，通过该字段关联会话。
     */
    public $SessionId;

    /**
     * @param string $Content 待检测的文本内容，需为UTF-8编码并以Base64格式传入。

     * @param string $BizType 接口使用的识别策略编号，需在[控制台](https://console.cloud.tencent.com/cms/clouds/manage)获取。详细获取方式请参考以下链接：
- **内容安全**（详见步骤四：策略配置）：[点击这里](https://cloud.tencent.com/document/product/1124/37119)
- **AI生成识别**（详见服务对接->方式二）：[点击这里](https://cloud.tencent.com/document/product/1124/118694)
     * @param string $DataId 该字段表示您为待检测文本分配的数据ID，作用是方便您对数据进行标识和管理。
取值：可由英文字母、数字、四种特殊符号（_，-，@，#）组成，**长度不超过64个字符**。
     * @param User $User 该字段标识用户信息，传入后可增强甄别有违规风险的发布者账号。
     * @param Device $Device 该字段标识设备信息，传入后可增强甄别有违规风险的发布者设备。
     * @param string $SourceLanguage Content字段的原始语种，枚举值包括 zh 和 en：
- 推荐使用 zh
- en 适用于纯英文内容，耗时较高。若需使用 en，请先通过[反馈工单](https://console.cloud.tencent.com/workorder/category?level1_id=141&level2_id=1287&source=14&data_title=%E6%96%87%E6%9C%AC%E5%86%85%E5%AE%B9%E5%AE%89%E5%85%A8&step=1)确认

     * @param string $Type 服务类型，枚举值包括 TEXT 和 TEXT_AIGC：
TEXT：内容安全
TEXT_AIGC：AI生成识别
     * @param string $SessionId 适用于上下文关联审核场景，若多条文本内容需要联合审核，通过该字段关联会话。
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
