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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建自动分类的结构化任务子任务信息
 *
 * @method array getFileList() 获取报告文件上传的地址列表，需按顺序排列。如果使用ImageList参数，置为空数组即可
 * @method void setFileList(array $FileList) 设置报告文件上传的地址列表，需按顺序排列。如果使用ImageList参数，置为空数组即可
 * @method string getCustomerId() 获取客户号
 * @method void setCustomerId(string $CustomerId) 设置客户号
 * @method string getCustomerName() 获取客户姓名
 * @method void setCustomerName(string $CustomerName) 设置客户姓名
 * @method array getImageList() 获取报告上传的图片内容数组，图片内容采用base64编码，需按顺序排列
 * @method void setImageList(array $ImageList) 设置报告上传的图片内容数组，图片内容采用base64编码，需按顺序排列
 */
class CreateAutoClassifyStructureTaskInfo extends AbstractModel
{
    /**
     * @var array 报告文件上传的地址列表，需按顺序排列。如果使用ImageList参数，置为空数组即可
     */
    public $FileList;

    /**
     * @var string 客户号
     */
    public $CustomerId;

    /**
     * @var string 客户姓名
     */
    public $CustomerName;

    /**
     * @var array 报告上传的图片内容数组，图片内容采用base64编码，需按顺序排列
     */
    public $ImageList;

    /**
     * @param array $FileList 报告文件上传的地址列表，需按顺序排列。如果使用ImageList参数，置为空数组即可
     * @param string $CustomerId 客户号
     * @param string $CustomerName 客户姓名
     * @param array $ImageList 报告上传的图片内容数组，图片内容采用base64编码，需按顺序排列
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
        if (array_key_exists("FileList",$param) and $param["FileList"] !== null) {
            $this->FileList = $param["FileList"];
        }

        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
        }

        if (array_key_exists("ImageList",$param) and $param["ImageList"] !== null) {
            $this->ImageList = $param["ImageList"];
        }
    }
}
