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
 * 直播流监播输出流信息
 *
 * @method integer getOutputStreamWidth() 获取监播任务输出流宽度像素。范围[1,1920]。建议至少大于100像素。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStreamWidth(integer $OutputStreamWidth) 设置监播任务输出流宽度像素。范围[1,1920]。建议至少大于100像素。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOutputStreamHeight() 获取监播任务输出流长度像素。范围[1,1080]，建议至少大于100像素。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStreamHeight(integer $OutputStreamHeight) 设置监播任务输出流长度像素。范围[1,1080]，建议至少大于100像素。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputStreamName() 获取监播任务输出流名称。
不填时，系统会自动生成。
256字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStreamName(string $OutputStreamName) 设置监播任务输出流名称。
不填时，系统会自动生成。
256字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputDomain() 获取监播任务播放域名。128字节以内，只允许填处于启用状态的播放域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputDomain(string $OutputDomain) 设置监播任务播放域名。128字节以内，只允许填处于启用状态的播放域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputApp() 获取监播任务播放路径。32字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputApp(string $OutputApp) 设置监播任务播放路径。32字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveStreamMonitorOutputInfo extends AbstractModel
{
    /**
     * @var integer 监播任务输出流宽度像素。范围[1,1920]。建议至少大于100像素。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStreamWidth;

    /**
     * @var integer 监播任务输出流长度像素。范围[1,1080]，建议至少大于100像素。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStreamHeight;

    /**
     * @var string 监播任务输出流名称。
不填时，系统会自动生成。
256字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStreamName;

    /**
     * @var string 监播任务播放域名。128字节以内，只允许填处于启用状态的播放域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputDomain;

    /**
     * @var string 监播任务播放路径。32字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputApp;

    /**
     * @param integer $OutputStreamWidth 监播任务输出流宽度像素。范围[1,1920]。建议至少大于100像素。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OutputStreamHeight 监播任务输出流长度像素。范围[1,1080]，建议至少大于100像素。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputStreamName 监播任务输出流名称。
不填时，系统会自动生成。
256字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputDomain 监播任务播放域名。128字节以内，只允许填处于启用状态的播放域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputApp 监播任务播放路径。32字节以内，只允许包含字母、数字、‘-’，‘_’，'.'字符。
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
        if (array_key_exists("OutputStreamWidth",$param) and $param["OutputStreamWidth"] !== null) {
            $this->OutputStreamWidth = $param["OutputStreamWidth"];
        }

        if (array_key_exists("OutputStreamHeight",$param) and $param["OutputStreamHeight"] !== null) {
            $this->OutputStreamHeight = $param["OutputStreamHeight"];
        }

        if (array_key_exists("OutputStreamName",$param) and $param["OutputStreamName"] !== null) {
            $this->OutputStreamName = $param["OutputStreamName"];
        }

        if (array_key_exists("OutputDomain",$param) and $param["OutputDomain"] !== null) {
            $this->OutputDomain = $param["OutputDomain"];
        }

        if (array_key_exists("OutputApp",$param) and $param["OutputApp"] !== null) {
            $this->OutputApp = $param["OutputApp"];
        }
    }
}
