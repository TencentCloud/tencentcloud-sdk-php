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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 登录短信验证码发送配置。用于管理登录时使用的短信验证码发送的通道相关设置，目前提供云开发默认短信包和客户自定义短信包，自定义短信包可以通过自定义apis或者自定义短信模板的方式接入，推荐使用云开发默认短信包，方便快捷。
- 如果使用自定义APIs发送短信，方法命名规则
方法名称：发送验证码
方法标识：SendVerificationCode
入参
Mobile：字符串（手机号，如：“+86 + 手机号”）
VerificationCode：字符串（验证码，如：“123456”）
返回值
ErrorCode：int（0 表示成功，非 0 表示失败）
ErrorMessage：字符串（ErrorCode 非 0 时，返回错误信息）
- 如果使用自定义短信模板发送短信时，需要按照对应的短信服务商的要求，申请并审核通过对应的短信模板后，在云开发平台配置自定义短信模板，云开发平台对于短信模板不会做其他操作和限制，只做短信发送的逻辑，其他的操作限制都由短信服务商自身提供。
 *
 * @method string getType() 获取<p>短信验证码发送通道类型。</p><p>枚举值：</p><ul><li>default： 使用默认云开发短信包发送短信</li><li>apis： 使用云开发自定义 APIs 作为短信发送通道，需配合 Name 和 Method 参数使用。不传则不修改当前配置。</li><li>template： 自定义短信模板配置，需要配置TemplateProvider</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>短信验证码发送通道类型。</p><p>枚举值：</p><ul><li>default： 使用默认云开发短信包发送短信</li><li>apis： 使用云开发自定义 APIs 作为短信发送通道，需配合 Name 和 Method 参数使用。不传则不修改当前配置。</li><li>template： 自定义短信模板配置，需要配置TemplateProvider</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>自定义 APIs 数据源唯一标识，当 Type 为 apis 时必填。用于定位微搭 APIs 中对应的数据源。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>自定义 APIs 数据源唯一标识，当 Type 为 apis 时必填。用于定位微搭 APIs 中对应的数据源。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMethod() 获取<p>自定义 APIs 方法名，当 Type 为 apis 时必填。指定微搭 APIs 中用于发送验证码的方法。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(string $Method) 设置<p>自定义 APIs 方法名，当 Type 为 apis 时必填。指定微搭 APIs 中用于发送验证码的方法。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSmsDayLimit() 获取<p>单个手机号每日短信发送上限。默认值为 30，传 -1 表示不限制，如果设置为不限制，需要注意恶意攻击，导致短信套餐用量计费问题。仅支持正整数或 -1。不传则不修改当前配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmsDayLimit(integer $SmsDayLimit) 设置<p>单个手机号每日短信发送上限。默认值为 30，传 -1 表示不限制，如果设置为不限制，需要注意恶意攻击，导致短信套餐用量计费问题。仅支持正整数或 -1。不传则不修改当前配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SMSProviderTemplateConfig getTemplateProvider() 获取<p>自定义短信服务商模板配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateProvider(SMSProviderTemplateConfig $TemplateProvider) 设置<p>自定义短信服务商模板配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class VerificationConfig extends AbstractModel
{
    /**
     * @var string <p>短信验证码发送通道类型。</p><p>枚举值：</p><ul><li>default： 使用默认云开发短信包发送短信</li><li>apis： 使用云开发自定义 APIs 作为短信发送通道，需配合 Name 和 Method 参数使用。不传则不修改当前配置。</li><li>template： 自定义短信模板配置，需要配置TemplateProvider</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>自定义 APIs 数据源唯一标识，当 Type 为 apis 时必填。用于定位微搭 APIs 中对应的数据源。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>自定义 APIs 方法名，当 Type 为 apis 时必填。指定微搭 APIs 中用于发送验证码的方法。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var integer <p>单个手机号每日短信发送上限。默认值为 30，传 -1 表示不限制，如果设置为不限制，需要注意恶意攻击，导致短信套餐用量计费问题。仅支持正整数或 -1。不传则不修改当前配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmsDayLimit;

    /**
     * @var SMSProviderTemplateConfig <p>自定义短信服务商模板配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateProvider;

    /**
     * @param string $Type <p>短信验证码发送通道类型。</p><p>枚举值：</p><ul><li>default： 使用默认云开发短信包发送短信</li><li>apis： 使用云开发自定义 APIs 作为短信发送通道，需配合 Name 和 Method 参数使用。不传则不修改当前配置。</li><li>template： 自定义短信模板配置，需要配置TemplateProvider</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>自定义 APIs 数据源唯一标识，当 Type 为 apis 时必填。用于定位微搭 APIs 中对应的数据源。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Method <p>自定义 APIs 方法名，当 Type 为 apis 时必填。指定微搭 APIs 中用于发送验证码的方法。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SmsDayLimit <p>单个手机号每日短信发送上限。默认值为 30，传 -1 表示不限制，如果设置为不限制，需要注意恶意攻击，导致短信套餐用量计费问题。仅支持正整数或 -1。不传则不修改当前配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SMSProviderTemplateConfig $TemplateProvider <p>自定义短信服务商模板配置</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("SmsDayLimit",$param) and $param["SmsDayLimit"] !== null) {
            $this->SmsDayLimit = $param["SmsDayLimit"];
        }

        if (array_key_exists("TemplateProvider",$param) and $param["TemplateProvider"] !== null) {
            $this->TemplateProvider = new SMSProviderTemplateConfig();
            $this->TemplateProvider->deserialize($param["TemplateProvider"]);
        }
    }
}
