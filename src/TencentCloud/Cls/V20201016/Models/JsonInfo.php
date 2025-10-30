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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * JSON类型描述
 *
 * @method boolean getEnableTag() 获取启用标志
 * @method void setEnableTag(boolean $EnableTag) 设置启用标志
 * @method array getMetaFields() 获取元数据信息列表, 可选值为 __SOURCE__、__FILENAME__、__TIMESTAMP__、__HOSTNAME__。

- __SOURCE__：日志采集的源 IP，示例：10.0.1.2
- __FILENAME__：日志采集的文件名，示例：/data/log/nginx/access.log
- __TIMESTAMP__：日志时间戳（毫秒级别 Unix 时间戳），按时间范围检索日志时，将自动使用该时间对日志进行检索，在控制台显示为“日志时间”，示例：1640005601188
- __HOSTNAME__：日志来源机器名称，需使用2.7.4及以上版本的 Loglistener 才会采集该字段，示例：localhost
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaFields(array $MetaFields) 设置元数据信息列表, 可选值为 __SOURCE__、__FILENAME__、__TIMESTAMP__、__HOSTNAME__。

- __SOURCE__：日志采集的源 IP，示例：10.0.1.2
- __FILENAME__：日志采集的文件名，示例：/data/log/nginx/access.log
- __TIMESTAMP__：日志时间戳（毫秒级别 Unix 时间戳），按时间范围检索日志时，将自动使用该时间对日志进行检索，在控制台显示为“日志时间”，示例：1640005601188
- __HOSTNAME__：日志来源机器名称，需使用2.7.4及以上版本的 Loglistener 才会采集该字段，示例：localhost
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJsonType() 获取投递Json格式，0：字符串方式投递；1:以结构化方式投递
 * @method void setJsonType(integer $JsonType) 设置投递Json格式，0：字符串方式投递；1:以结构化方式投递
 */
class JsonInfo extends AbstractModel
{
    /**
     * @var boolean 启用标志
     */
    public $EnableTag;

    /**
     * @var array 元数据信息列表, 可选值为 __SOURCE__、__FILENAME__、__TIMESTAMP__、__HOSTNAME__。

- __SOURCE__：日志采集的源 IP，示例：10.0.1.2
- __FILENAME__：日志采集的文件名，示例：/data/log/nginx/access.log
- __TIMESTAMP__：日志时间戳（毫秒级别 Unix 时间戳），按时间范围检索日志时，将自动使用该时间对日志进行检索，在控制台显示为“日志时间”，示例：1640005601188
- __HOSTNAME__：日志来源机器名称，需使用2.7.4及以上版本的 Loglistener 才会采集该字段，示例：localhost
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaFields;

    /**
     * @var integer 投递Json格式，0：字符串方式投递；1:以结构化方式投递
     */
    public $JsonType;

    /**
     * @param boolean $EnableTag 启用标志
     * @param array $MetaFields 元数据信息列表, 可选值为 __SOURCE__、__FILENAME__、__TIMESTAMP__、__HOSTNAME__。

- __SOURCE__：日志采集的源 IP，示例：10.0.1.2
- __FILENAME__：日志采集的文件名，示例：/data/log/nginx/access.log
- __TIMESTAMP__：日志时间戳（毫秒级别 Unix 时间戳），按时间范围检索日志时，将自动使用该时间对日志进行检索，在控制台显示为“日志时间”，示例：1640005601188
- __HOSTNAME__：日志来源机器名称，需使用2.7.4及以上版本的 Loglistener 才会采集该字段，示例：localhost
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JsonType 投递Json格式，0：字符串方式投递；1:以结构化方式投递
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
        if (array_key_exists("EnableTag",$param) and $param["EnableTag"] !== null) {
            $this->EnableTag = $param["EnableTag"];
        }

        if (array_key_exists("MetaFields",$param) and $param["MetaFields"] !== null) {
            $this->MetaFields = $param["MetaFields"];
        }

        if (array_key_exists("JsonType",$param) and $param["JsonType"] !== null) {
            $this->JsonType = $param["JsonType"];
        }
    }
}
