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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用信息
 *
 * @method string getApiAppName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiAppName(string $ApiAppName) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiAppId() 获取应用ID
 * @method void setApiAppId(string $ApiAppId) 设置应用ID
 * @method string getApiAppSecret() 获取应用SECRET
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiAppSecret(string $ApiAppSecret) 设置应用SECRET
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiAppDesc() 获取应用描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiAppDesc(string $ApiAppDesc) 设置应用描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取修改时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置修改时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiAppKey() 获取应用KEY
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiAppKey(string $ApiAppKey) 设置应用KEY
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiAppInfo extends AbstractModel
{
    /**
     * @var string 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiAppName;

    /**
     * @var string 应用ID
     */
    public $ApiAppId;

    /**
     * @var string 应用SECRET
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiAppSecret;

    /**
     * @var string 应用描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiAppDesc;

    /**
     * @var string 创建时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 修改时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @var string 应用KEY
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiAppKey;

    /**
     * @param string $ApiAppName 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiAppId 应用ID
     * @param string $ApiAppSecret 应用SECRET
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiAppDesc 应用描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 修改时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiAppKey 应用KEY
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
        if (array_key_exists("ApiAppName",$param) and $param["ApiAppName"] !== null) {
            $this->ApiAppName = $param["ApiAppName"];
        }

        if (array_key_exists("ApiAppId",$param) and $param["ApiAppId"] !== null) {
            $this->ApiAppId = $param["ApiAppId"];
        }

        if (array_key_exists("ApiAppSecret",$param) and $param["ApiAppSecret"] !== null) {
            $this->ApiAppSecret = $param["ApiAppSecret"];
        }

        if (array_key_exists("ApiAppDesc",$param) and $param["ApiAppDesc"] !== null) {
            $this->ApiAppDesc = $param["ApiAppDesc"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("ApiAppKey",$param) and $param["ApiAppKey"] !== null) {
            $this->ApiAppKey = $param["ApiAppKey"];
        }
    }
}
