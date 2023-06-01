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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 词库关键词删除结果详情
 *
 * @method string getSampleID() 获取关键词ID
 * @method void setSampleID(string $SampleID) 设置关键词ID
 * @method string getContent() 获取关键词内容
 * @method void setContent(string $Content) 设置关键词内容
 * @method boolean getDeleted() 获取是否删除成功
 * @method void setDeleted(boolean $Deleted) 设置是否删除成功
 * @method string getErrorInfo() 获取错误信息
 * @method void setErrorInfo(string $ErrorInfo) 设置错误信息
 */
class DeleteSampleDetails extends AbstractModel
{
    /**
     * @var string 关键词ID
     */
    public $SampleID;

    /**
     * @var string 关键词内容
     */
    public $Content;

    /**
     * @var boolean 是否删除成功
     */
    public $Deleted;

    /**
     * @var string 错误信息
     */
    public $ErrorInfo;

    /**
     * @param string $SampleID 关键词ID
     * @param string $Content 关键词内容
     * @param boolean $Deleted 是否删除成功
     * @param string $ErrorInfo 错误信息
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
        if (array_key_exists("SampleID",$param) and $param["SampleID"] !== null) {
            $this->SampleID = $param["SampleID"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }
    }
}
