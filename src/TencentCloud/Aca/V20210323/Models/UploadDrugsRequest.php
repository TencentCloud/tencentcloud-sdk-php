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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadDrugs请求参数结构体
 *
 * @method CommonHeader getHeader() 获取请求头数据
 * @method void setHeader(CommonHeader $Header) 设置请求头数据
 * @method UploadDrugData getData() 获取药品上传数据
 * @method void setData(UploadDrugData $Data) 设置药品上传数据
 */
class UploadDrugsRequest extends AbstractModel
{
    /**
     * @var CommonHeader 请求头数据
     */
    public $Header;

    /**
     * @var UploadDrugData 药品上传数据
     */
    public $Data;

    /**
     * @param CommonHeader $Header 请求头数据
     * @param UploadDrugData $Data 药品上传数据
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
        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = new CommonHeader();
            $this->Header->deserialize($param["Header"]);
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new UploadDrugData();
            $this->Data->deserialize($param["Data"]);
        }
    }
}
