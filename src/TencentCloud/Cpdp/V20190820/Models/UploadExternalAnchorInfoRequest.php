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
 * UploadExternalAnchorInfo请求参数结构体
 *
 * @method string getAnchorId() 获取主播Id
 * @method void setAnchorId(string $AnchorId) 设置主播Id
 * @method string getIdCardFront() 获取身份证正面图片下载链接
 * @method void setIdCardFront(string $IdCardFront) 设置身份证正面图片下载链接
 * @method string getIdCardReverse() 获取身份证反面图片下载链接
 * @method void setIdCardReverse(string $IdCardReverse) 设置身份证反面图片下载链接
 */
class UploadExternalAnchorInfoRequest extends AbstractModel
{
    /**
     * @var string 主播Id
     */
    public $AnchorId;

    /**
     * @var string 身份证正面图片下载链接
     */
    public $IdCardFront;

    /**
     * @var string 身份证反面图片下载链接
     */
    public $IdCardReverse;

    /**
     * @param string $AnchorId 主播Id
     * @param string $IdCardFront 身份证正面图片下载链接
     * @param string $IdCardReverse 身份证反面图片下载链接
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
        if (array_key_exists("AnchorId",$param) and $param["AnchorId"] !== null) {
            $this->AnchorId = $param["AnchorId"];
        }

        if (array_key_exists("IdCardFront",$param) and $param["IdCardFront"] !== null) {
            $this->IdCardFront = $param["IdCardFront"];
        }

        if (array_key_exists("IdCardReverse",$param) and $param["IdCardReverse"] !== null) {
            $this->IdCardReverse = $param["IdCardReverse"];
        }
    }
}
