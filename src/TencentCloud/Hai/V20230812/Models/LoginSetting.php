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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 某服务的登录配置
 *
 * @method string getServiceName() 获取服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取服务登录url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置服务登录url
注意：此字段可能返回 null，表示取不到有效值。
 */
class LoginSetting extends AbstractModel
{
    /**
     * @var string 服务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string 服务登录url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @param string $ServiceName 服务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 服务登录url
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
