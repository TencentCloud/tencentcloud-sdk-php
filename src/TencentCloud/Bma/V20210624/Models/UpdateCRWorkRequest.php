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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCRWork请求参数结构体
 *
 * @method integer getWorkId() 获取xx
 * @method void setWorkId(integer $WorkId) 设置xx
 * @method string getContentType() 获取xx
 * @method void setContentType(string $ContentType) 设置xx
 * @method string getContent() 获取xx
 * @method void setContent(string $Content) 设置xx
 * @method string getCertType() 获取xx
 * @method void setCertType(string $CertType) 设置xx
 */
class UpdateCRWorkRequest extends AbstractModel
{
    /**
     * @var integer xx
     */
    public $WorkId;

    /**
     * @var string xx
     */
    public $ContentType;

    /**
     * @var string xx
     */
    public $Content;

    /**
     * @var string xx
     */
    public $CertType;

    /**
     * @param integer $WorkId xx
     * @param string $ContentType xx
     * @param string $Content xx
     * @param string $CertType xx
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
        if (array_key_exists("WorkId",$param) and $param["WorkId"] !== null) {
            $this->WorkId = $param["WorkId"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }
    }
}
