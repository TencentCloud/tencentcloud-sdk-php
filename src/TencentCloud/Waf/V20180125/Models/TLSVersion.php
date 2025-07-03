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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TLS信息
 *
 * @method integer getVersionId() 获取TLSVERSION的ID
 * @method void setVersionId(integer $VersionId) 设置TLSVERSION的ID
 * @method string getVersionName() 获取TLSVERSION的NAME
 * @method void setVersionName(string $VersionName) 设置TLSVERSION的NAME
 */
class TLSVersion extends AbstractModel
{
    /**
     * @var integer TLSVERSION的ID
     */
    public $VersionId;

    /**
     * @var string TLSVERSION的NAME
     */
    public $VersionName;

    /**
     * @param integer $VersionId TLSVERSION的ID
     * @param string $VersionName TLSVERSION的NAME
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }
    }
}
