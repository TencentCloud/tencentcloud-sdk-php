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
 * 应用绑定的Api信息
 *
 * @method string getApiAppName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiAppName(string $ApiAppName) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiAppId() 获取应用ID
 * @method void setApiAppId(string $ApiAppId) 设置应用ID
 * @method string getApiId() 获取Api的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiId(string $ApiId) 设置Api的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiName() 获取Api名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiName(string $ApiName) 设置Api名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceId() 获取服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceId(string $ServiceId) 设置服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthorizedTime() 获取授权绑定时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizedTime(string $AuthorizedTime) 设置授权绑定时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiRegion() 获取Api所属地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiRegion(string $ApiRegion) 设置Api所属地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvironmentName() 获取授权绑定的环境
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironmentName(string $EnvironmentName) 设置授权绑定的环境
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiAppApiInfo extends AbstractModel
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
     * @var string Api的ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiId;

    /**
     * @var string Api名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiName;

    /**
     * @var string 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceId;

    /**
     * @var string 授权绑定时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizedTime;

    /**
     * @var string Api所属地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiRegion;

    /**
     * @var string 授权绑定的环境
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvironmentName;

    /**
     * @param string $ApiAppName 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiAppId 应用ID
     * @param string $ApiId Api的ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiName Api名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceId 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthorizedTime 授权绑定时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiRegion Api所属地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvironmentName 授权绑定的环境
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

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("AuthorizedTime",$param) and $param["AuthorizedTime"] !== null) {
            $this->AuthorizedTime = $param["AuthorizedTime"];
        }

        if (array_key_exists("ApiRegion",$param) and $param["ApiRegion"] !== null) {
            $this->ApiRegion = $param["ApiRegion"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }
    }
}
