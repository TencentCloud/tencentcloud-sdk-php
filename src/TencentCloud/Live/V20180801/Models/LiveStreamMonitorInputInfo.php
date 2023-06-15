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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播监播功能输入流信息
 *
 * @method string getInputStreamName() 获取待监播的输入流名称。256字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputStreamName(string $InputStreamName) 设置待监播的输入流名称。256字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputDomain() 获取待监播的输入流推流域名。128字节以内，只允许填处于启用状态的推流域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputDomain(string $InputDomain) 设置待监播的输入流推流域名。128字节以内，只允许填处于启用状态的推流域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputApp() 获取待监播的输入流推流路径。32字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputApp(string $InputApp) 设置待监播的输入流推流路径。32字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputUrl() 获取待监播的输入流推流url。一般场景下，无需该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputUrl(string $InputUrl) 设置待监播的输入流推流url。一般场景下，无需该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述。256字节以内。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述。256字节以内。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveStreamMonitorInputInfo extends AbstractModel
{
    /**
     * @var string 待监播的输入流名称。256字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputStreamName;

    /**
     * @var string 待监播的输入流推流域名。128字节以内，只允许填处于启用状态的推流域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputDomain;

    /**
     * @var string 待监播的输入流推流路径。32字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputApp;

    /**
     * @var string 待监播的输入流推流url。一般场景下，无需该参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputUrl;

    /**
     * @var string 描述。256字节以内。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $InputStreamName 待监播的输入流名称。256字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputDomain 待监播的输入流推流域名。128字节以内，只允许填处于启用状态的推流域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputApp 待监播的输入流推流路径。32字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputUrl 待监播的输入流推流url。一般场景下，无需该参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述。256字节以内。
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
        if (array_key_exists("InputStreamName",$param) and $param["InputStreamName"] !== null) {
            $this->InputStreamName = $param["InputStreamName"];
        }

        if (array_key_exists("InputDomain",$param) and $param["InputDomain"] !== null) {
            $this->InputDomain = $param["InputDomain"];
        }

        if (array_key_exists("InputApp",$param) and $param["InputApp"] !== null) {
            $this->InputApp = $param["InputApp"];
        }

        if (array_key_exists("InputUrl",$param) and $param["InputUrl"] !== null) {
            $this->InputUrl = $param["InputUrl"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
