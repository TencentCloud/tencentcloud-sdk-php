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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件验证信息
 *
 * @method string getFileVerifyUrl() 获取文件验证 URL 指引。
 * @method void setFileVerifyUrl(string $FileVerifyUrl) 设置文件验证 URL 指引。
 * @method array getFileVerifyDomains() 获取文件校验域名列表。
 * @method void setFileVerifyDomains(array $FileVerifyDomains) 设置文件校验域名列表。
 * @method string getFileVerifyName() 获取文件校验文件名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileVerifyName(string $FileVerifyName) 设置文件校验文件名。
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileVerifyInfo extends AbstractModel
{
    /**
     * @var string 文件验证 URL 指引。
     */
    public $FileVerifyUrl;

    /**
     * @var array 文件校验域名列表。
     */
    public $FileVerifyDomains;

    /**
     * @var string 文件校验文件名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileVerifyName;

    /**
     * @param string $FileVerifyUrl 文件验证 URL 指引。
     * @param array $FileVerifyDomains 文件校验域名列表。
     * @param string $FileVerifyName 文件校验文件名。
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
        if (array_key_exists("FileVerifyUrl",$param) and $param["FileVerifyUrl"] !== null) {
            $this->FileVerifyUrl = $param["FileVerifyUrl"];
        }

        if (array_key_exists("FileVerifyDomains",$param) and $param["FileVerifyDomains"] !== null) {
            $this->FileVerifyDomains = $param["FileVerifyDomains"];
        }

        if (array_key_exists("FileVerifyName",$param) and $param["FileVerifyName"] !== null) {
            $this->FileVerifyName = $param["FileVerifyName"];
        }
    }
}
