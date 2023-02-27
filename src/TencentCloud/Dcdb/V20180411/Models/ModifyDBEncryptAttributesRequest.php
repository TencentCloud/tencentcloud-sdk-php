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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBEncryptAttributes请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id，形如：tdsqlshard-ow728lmc。
 * @method void setInstanceId(string $InstanceId) 设置实例Id，形如：tdsqlshard-ow728lmc。
 * @method integer getEncryptEnabled() 获取是否启用数据加密，开启后暂不支持关闭。本接口的可选值为：1-开启数据加密。
 * @method void setEncryptEnabled(integer $EncryptEnabled) 设置是否启用数据加密，开启后暂不支持关闭。本接口的可选值为：1-开启数据加密。
 */
class ModifyDBEncryptAttributesRequest extends AbstractModel
{
    /**
     * @var string 实例Id，形如：tdsqlshard-ow728lmc。
     */
    public $InstanceId;

    /**
     * @var integer 是否启用数据加密，开启后暂不支持关闭。本接口的可选值为：1-开启数据加密。
     */
    public $EncryptEnabled;

    /**
     * @param string $InstanceId 实例Id，形如：tdsqlshard-ow728lmc。
     * @param integer $EncryptEnabled 是否启用数据加密，开启后暂不支持关闭。本接口的可选值为：1-开启数据加密。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EncryptEnabled",$param) and $param["EncryptEnabled"] !== null) {
            $this->EncryptEnabled = $param["EncryptEnabled"];
        }
    }
}
