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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostUploadUpdateRecord请求参数结构体
 *
 * @method integer getOffset() 获取分页偏移量，从0开始。
 * @method void setOffset(integer $Offset) 设置分页偏移量，从0开始。
 * @method integer getLimit() 获取每页数量，默认10。
 * @method void setLimit(integer $Limit) 设置每页数量，默认10。
 * @method string getOldCertificateId() 获取原证书ID
 * @method void setOldCertificateId(string $OldCertificateId) 设置原证书ID
 */
class DescribeHostUploadUpdateRecordRequest extends AbstractModel
{
    /**
     * @var integer 分页偏移量，从0开始。
     */
    public $Offset;

    /**
     * @var integer 每页数量，默认10。
     */
    public $Limit;

    /**
     * @var string 原证书ID
     */
    public $OldCertificateId;

    /**
     * @param integer $Offset 分页偏移量，从0开始。
     * @param integer $Limit 每页数量，默认10。
     * @param string $OldCertificateId 原证书ID
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }
    }
}
