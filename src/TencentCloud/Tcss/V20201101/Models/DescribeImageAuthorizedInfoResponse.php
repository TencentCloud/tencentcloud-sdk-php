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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageAuthorizedInfo返回参数结构体
 *
 * @method integer getTotalAuthorizedCnt() 获取总共有效的镜像授权数
 * @method void setTotalAuthorizedCnt(integer $TotalAuthorizedCnt) 设置总共有效的镜像授权数
 * @method integer getUsedAuthorizedCnt() 获取已使用镜像授权数
 * @method void setUsedAuthorizedCnt(integer $UsedAuthorizedCnt) 设置已使用镜像授权数
 * @method integer getScannedImageCnt() 获取已开启扫描镜像数
 * @method void setScannedImageCnt(integer $ScannedImageCnt) 设置已开启扫描镜像数
 * @method integer getNotScannedImageCnt() 获取未开启扫描镜像数
 * @method void setNotScannedImageCnt(integer $NotScannedImageCnt) 设置未开启扫描镜像数
 * @method integer getNotScannedLocalImageCnt() 获取本地未开启扫描镜像数
 * @method void setNotScannedLocalImageCnt(integer $NotScannedLocalImageCnt) 设置本地未开启扫描镜像数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageAuthorizedInfoResponse extends AbstractModel
{
    /**
     * @var integer 总共有效的镜像授权数
     */
    public $TotalAuthorizedCnt;

    /**
     * @var integer 已使用镜像授权数
     */
    public $UsedAuthorizedCnt;

    /**
     * @var integer 已开启扫描镜像数
     */
    public $ScannedImageCnt;

    /**
     * @var integer 未开启扫描镜像数
     */
    public $NotScannedImageCnt;

    /**
     * @var integer 本地未开启扫描镜像数
     */
    public $NotScannedLocalImageCnt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalAuthorizedCnt 总共有效的镜像授权数
     * @param integer $UsedAuthorizedCnt 已使用镜像授权数
     * @param integer $ScannedImageCnt 已开启扫描镜像数
     * @param integer $NotScannedImageCnt 未开启扫描镜像数
     * @param integer $NotScannedLocalImageCnt 本地未开启扫描镜像数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalAuthorizedCnt",$param) and $param["TotalAuthorizedCnt"] !== null) {
            $this->TotalAuthorizedCnt = $param["TotalAuthorizedCnt"];
        }

        if (array_key_exists("UsedAuthorizedCnt",$param) and $param["UsedAuthorizedCnt"] !== null) {
            $this->UsedAuthorizedCnt = $param["UsedAuthorizedCnt"];
        }

        if (array_key_exists("ScannedImageCnt",$param) and $param["ScannedImageCnt"] !== null) {
            $this->ScannedImageCnt = $param["ScannedImageCnt"];
        }

        if (array_key_exists("NotScannedImageCnt",$param) and $param["NotScannedImageCnt"] !== null) {
            $this->NotScannedImageCnt = $param["NotScannedImageCnt"];
        }

        if (array_key_exists("NotScannedLocalImageCnt",$param) and $param["NotScannedLocalImageCnt"] !== null) {
            $this->NotScannedLocalImageCnt = $param["NotScannedLocalImageCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
