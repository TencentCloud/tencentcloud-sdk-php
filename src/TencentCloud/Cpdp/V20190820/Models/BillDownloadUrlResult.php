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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机构账单文件下载地址响应对象
 *
 * @method string getDownloadUrl() 获取对账单下载地址。GET方式访问，返回zip包，解压后为csv格式文件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadUrl(string $DownloadUrl) 设置对账单下载地址。GET方式访问，返回zip包，解压后为csv格式文件。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BillDownloadUrlResult extends AbstractModel
{
    /**
     * @var string 对账单下载地址。GET方式访问，返回zip包，解压后为csv格式文件。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadUrl;

    /**
     * @param string $DownloadUrl 对账单下载地址。GET方式访问，返回zip包，解压后为csv格式文件。
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
        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }
    }
}
