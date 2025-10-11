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
 * @method string getContent() 获取该字段表示待检测对象的文本内容，文本需要按utf-8格式编码，长度不能超过10000个字符（按unicode编码计算），并进行 Base64加密
 * @method void setContent(string $Content) 设置该字段表示待检测对象的文本内容，文本需要按utf-8格式编码，长度不能超过10000个字符（按unicode编码计算），并进行 Base64加密
 * @method string getBizType() 获取该字段表示使用的策略的具体编号，该字段需要先在[内容安全控制台](https://console.cloud.tencent.com/cms/clouds/manage)中配置。
备注：不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。
 * @method void setBizType(string $BizType) 设置该字段表示使用的策略的具体编号，该字段需要先在[内容安全控制台](https://console.cloud.tencent.com/cms/clouds/manage)中配置。
备注：不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。
 * @method string getDataId() 获取该字段表示您为待检测对象分配的数据ID，传入后可方便您对文件进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，**长度不超过64个字符**
 * @method void setDataId(string $DataId) 设置该字段表示您为待检测对象分配的数据ID，传入后可方便您对文件进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，**长度不超过64个字符**
 * @method User getUser() 获取该字段表示待检测对象对应的用户相关信息，传入后可便于甄别相应违规风险用户
 * @method void setUser(User $User) 设置该字段表示待检测对象对应的用户相关信息，传入后可便于甄别相应违规风险用户
 * @method Device getDevice() 获取该字段表示待检测对象对应的设备相关信息，传入后可便于甄别相应违规风险设备
 * @method void setDevice(Device $Device) 设置该字段表示待检测对象对应的设备相关信息，传入后可便于甄别相应违规风险设备
 * @method string getSourceLanguage() 获取表示Content的原始语种，枚举值包括 "en" 和 "zh"。其中，"en" 表示英文，"zh" 表示中文。非中文场景的处理耗时较高，具体情况取决于送审文本长度，非中文场景需[反馈工单](https://console.cloud.tencent.com/workorder/category?level1_id=141&level2_id=1287&source=14&data_title=%E6%96%87%E6%9C%AC%E5%86%85%E5%AE%B9%E5%AE%89%E5%85%A8&step=1)确认。
 * @method void setSourceLanguage(string $SourceLanguage) 设置表示Content的原始语种，枚举值包括 "en" 和 "zh"。其中，"en" 表示英文，"zh" 表示中文。非中文场景的处理耗时较高，具体情况取决于送审文本长度，非中文场景需[反馈工单](https://console.cloud.tencent.com/workorder/category?level1_id=141&level2_id=1287&source=14&data_title=%E6%96%87%E6%9C%AC%E5%86%85%E5%AE%B9%E5%AE%89%E5%85%A8&step=1)确认。
 * @method string getType() 获取审核的业务类型，枚举值包括"TEXT"和"TEXT_AIGC"。其中"TEXT"表示传统文本审核，"TEXT_AIGC"表示AI生成检测（生成检测能力具体能力了解可[参见文档](https://cloud.tencent.com/document/product/1124/118694)）。
 * @method void setType(string $Type) 设置审核的业务类型，枚举值包括"TEXT"和"TEXT_AIGC"。其中"TEXT"表示传统文本审核，"TEXT_AIGC"表示AI生成检测（生成检测能力具体能力了解可[参见文档](https://cloud.tencent.com/document/product/1124/118694)）。
 */
class TextModerationRequest extends AbstractModel
{
    /**
     * @var string 该字段表示待检测对象的文本内容，文本需要按utf-8格式编码，长度不能超过10000个字符（按unicode编码计算），并进行 Base64加密
     */
    public $Content;

    /**
     * @var string 该字段表示使用的策略的具体编号，该字段需要先在[内容安全控制台](https://console.cloud.tencent.com/cms/clouds/manage)中配置。
备注：不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。
     */
    public $BizType;

    /**
     * @var string 该字段表示您为待检测对象分配的数据ID，传入后可方便您对文件进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，**长度不超过64个字符**
     */
    public $DataId;

    /**
     * @var User 该字段表示待检测对象对应的用户相关信息，传入后可便于甄别相应违规风险用户
     */
    public $User;

    /**
     * @var Device 该字段表示待检测对象对应的设备相关信息，传入后可便于甄别相应违规风险设备
     */
    public $Device;

    /**
     * @var string 表示Content的原始语种，枚举值包括 "en" 和 "zh"。其中，"en" 表示英文，"zh" 表示中文。非中文场景的处理耗时较高，具体情况取决于送审文本长度，非中文场景需[反馈工单](https://console.cloud.tencent.com/workorder/category?level1_id=141&level2_id=1287&source=14&data_title=%E6%96%87%E6%9C%AC%E5%86%85%E5%AE%B9%E5%AE%89%E5%85%A8&step=1)确认。
     */
    public $SourceLanguage;

    /**
     * @var string 审核的业务类型，枚举值包括"TEXT"和"TEXT_AIGC"。其中"TEXT"表示传统文本审核，"TEXT_AIGC"表示AI生成检测（生成检测能力具体能力了解可[参见文档](https://cloud.tencent.com/document/product/1124/118694)）。
     */
    public $Type;

    /**
     * @param string $Content 该字段表示待检测对象的文本内容，文本需要按utf-8格式编码，长度不能超过10000个字符（按unicode编码计算），并进行 Base64加密
     * @param string $BizType 该字段表示使用的策略的具体编号，该字段需要先在[内容安全控制台](https://console.cloud.tencent.com/cms/clouds/manage)中配置。
备注：不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。
     * @param string $DataId 该字段表示您为待检测对象分配的数据ID，传入后可方便您对文件进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，**长度不超过64个字符**
     * @param User $User 该字段表示待检测对象对应的用户相关信息，传入后可便于甄别相应违规风险用户
     * @param Device $Device 该字段表示待检测对象对应的设备相关信息，传入后可便于甄别相应违规风险设备
     * @param string $SourceLanguage 表示Content的原始语种，枚举值包括 "en" 和 "zh"。其中，"en" 表示英文，"zh" 表示中文。非中文场景的处理耗时较高，具体情况取决于送审文本长度，非中文场景需[反馈工单](https://console.cloud.tencent.com/workorder/category?level1_id=141&level2_id=1287&source=14&data_title=%E6%96%87%E6%9C%AC%E5%86%85%E5%AE%B9%E5%AE%89%E5%85%A8&step=1)确认。
     * @param string $Type 审核的业务类型，枚举值包括"TEXT"和"TEXT_AIGC"。其中"TEXT"表示传统文本审核，"TEXT_AIGC"表示AI生成检测（生成检测能力具体能力了解可[参见文档](https://cloud.tencent.com/document/product/1124/118694)）。
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
    }
}
