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
 * vpc通道绑定的api信息
 *
 * @method string getApiId() 获取api唯一id
 * @method void setApiId(string $ApiId) 设置api唯一id
 * @method string getServiceId() 获取Service唯一id
 * @method void setServiceId(string $ServiceId) 设置Service唯一id
 * @method string getApiName() 获取api名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiName(string $ApiName) 设置api名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取服务名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置服务名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBindTime() 获取绑定时间
 * @method void setBindTime(string $BindTime) 设置绑定时间
 */
class BindApiInfo extends AbstractModel
{
    /**
     * @var string api唯一id
     */
    public $ApiId;

    /**
     * @var string Service唯一id
     */
    public $ServiceId;

    /**
     * @var string api名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiName;

    /**
     * @var string 服务名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string 绑定时间
     */
    public $BindTime;

    /**
     * @param string $ApiId api唯一id
     * @param string $ServiceId Service唯一id
     * @param string $ApiName api名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName 服务名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BindTime 绑定时间
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
        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("BindTime",$param) and $param["BindTime"] !== null) {
            $this->BindTime = $param["BindTime"];
        }
    }
}
