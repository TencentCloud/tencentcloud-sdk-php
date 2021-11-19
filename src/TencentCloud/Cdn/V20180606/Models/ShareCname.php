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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ShareCname配置
 *
 * @method string getSwitch() 获取ShareCname 配置开关, 开关为off时，域名使用默认CNAME，若需要使用共享CNAME，将开关置为on.

* ShareCname 为内测功能,如需使用,请联系腾讯云工程师开白.
 * @method void setSwitch(string $Switch) 设置ShareCname 配置开关, 开关为off时，域名使用默认CNAME，若需要使用共享CNAME，将开关置为on.

* ShareCname 为内测功能,如需使用,请联系腾讯云工程师开白.
 * @method string getCname() 获取设置共享CNAME.
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCname(string $Cname) 设置设置共享CNAME.
注意：此字段可能返回 null，表示取不到有效值。
 */
class ShareCname extends AbstractModel
{
    /**
     * @var string ShareCname 配置开关, 开关为off时，域名使用默认CNAME，若需要使用共享CNAME，将开关置为on.

* ShareCname 为内测功能,如需使用,请联系腾讯云工程师开白.
     */
    public $Switch;

    /**
     * @var string 设置共享CNAME.
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cname;

    /**
     * @param string $Switch ShareCname 配置开关, 开关为off时，域名使用默认CNAME，若需要使用共享CNAME，将开关置为on.

* ShareCname 为内测功能,如需使用,请联系腾讯云工程师开白.
     * @param string $Cname 设置共享CNAME.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }
    }
}
