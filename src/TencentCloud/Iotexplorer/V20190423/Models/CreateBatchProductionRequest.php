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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBatchProduction请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method integer getBurnMethod() 获取烧录方式，0为直接烧录，1为动态注册。
 * @method void setBurnMethod(integer $BurnMethod) 设置烧录方式，0为直接烧录，1为动态注册。
 * @method integer getGenerationMethod() 获取生成方式，0为系统生成，1为文件上传。
 * @method void setGenerationMethod(integer $GenerationMethod) 设置生成方式，0为系统生成，1为文件上传。
 * @method string getUploadUrl() 获取文件上传URL，用于文件上传时填写。
 * @method void setUploadUrl(string $UploadUrl) 设置文件上传URL，用于文件上传时填写。
 * @method integer getBatchCnt() 获取量产数量，用于系统生成时填写。
 * @method void setBatchCnt(integer $BatchCnt) 设置量产数量，用于系统生成时填写。
 * @method integer getGenerationQRCode() 获取是否生成二维码,0为不生成，1为生成。
 * @method void setGenerationQRCode(integer $GenerationQRCode) 设置是否生成二维码,0为不生成，1为生成。
 */
class CreateBatchProductionRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var integer 烧录方式，0为直接烧录，1为动态注册。
     */
    public $BurnMethod;

    /**
     * @var integer 生成方式，0为系统生成，1为文件上传。
     */
    public $GenerationMethod;

    /**
     * @var string 文件上传URL，用于文件上传时填写。
     */
    public $UploadUrl;

    /**
     * @var integer 量产数量，用于系统生成时填写。
     */
    public $BatchCnt;

    /**
     * @var integer 是否生成二维码,0为不生成，1为生成。
     */
    public $GenerationQRCode;

    /**
     * @param string $ProjectId 项目ID
     * @param string $ProductId 产品ID
     * @param integer $BurnMethod 烧录方式，0为直接烧录，1为动态注册。
     * @param integer $GenerationMethod 生成方式，0为系统生成，1为文件上传。
     * @param string $UploadUrl 文件上传URL，用于文件上传时填写。
     * @param integer $BatchCnt 量产数量，用于系统生成时填写。
     * @param integer $GenerationQRCode 是否生成二维码,0为不生成，1为生成。
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("BurnMethod",$param) and $param["BurnMethod"] !== null) {
            $this->BurnMethod = $param["BurnMethod"];
        }

        if (array_key_exists("GenerationMethod",$param) and $param["GenerationMethod"] !== null) {
            $this->GenerationMethod = $param["GenerationMethod"];
        }

        if (array_key_exists("UploadUrl",$param) and $param["UploadUrl"] !== null) {
            $this->UploadUrl = $param["UploadUrl"];
        }

        if (array_key_exists("BatchCnt",$param) and $param["BatchCnt"] !== null) {
            $this->BatchCnt = $param["BatchCnt"];
        }

        if (array_key_exists("GenerationQRCode",$param) and $param["GenerationQRCode"] !== null) {
            $this->GenerationQRCode = $param["GenerationQRCode"];
        }
    }
}
