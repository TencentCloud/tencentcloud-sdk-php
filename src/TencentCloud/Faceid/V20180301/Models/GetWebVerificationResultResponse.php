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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetWebVerificationResult返回参数结构体
 *
 * @method integer getErrorCode() 获取本次核验最终结果。0为核验通过，是同一人。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCode(integer $ErrorCode) 设置本次核验最终结果。0为核验通过，是同一人。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMsg() 获取本次核验最终结果描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMsg(string $ErrorMsg) 设置本次核验最终结果描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVideoBestFrameUrl() 获取视频流中采集的最佳人脸照片临时地址，下载有效时间10分钟，如果需要存储请及时下载。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoBestFrameUrl(string $VideoBestFrameUrl) 设置视频流中采集的最佳人脸照片临时地址，下载有效时间10分钟，如果需要存储请及时下载。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVideoBestFrameMd5() 获取视频流中采集的最佳人脸照片内容MD5散列值，可以使用此值校验文件内容是否一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoBestFrameMd5(string $VideoBestFrameMd5) 设置视频流中采集的最佳人脸照片内容MD5散列值，可以使用此值校验文件内容是否一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVerificationDetailList() 获取本次核验流程的详细信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerificationDetailList(array $VerificationDetailList) 设置本次核验流程的详细信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVideoUrl() 获取视频流中采集的视频临时地址，下载有效时间10分钟，如果需要存储请及时下载。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoUrl(string $VideoUrl) 设置视频流中采集的视频临时地址，下载有效时间10分钟，如果需要存储请及时下载。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVideoMd5() 获取视频流中采集的视频内容MD5散列值，可以使用此值校验文件内容是否一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoMd5(string $VideoMd5) 设置视频流中采集的视频内容MD5散列值，可以使用此值校验文件内容是否一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetWebVerificationResultResponse extends AbstractModel
{
    /**
     * @var integer 本次核验最终结果。0为核验通过，是同一人。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCode;

    /**
     * @var string 本次核验最终结果描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMsg;

    /**
     * @var string 视频流中采集的最佳人脸照片临时地址，下载有效时间10分钟，如果需要存储请及时下载。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoBestFrameUrl;

    /**
     * @var string 视频流中采集的最佳人脸照片内容MD5散列值，可以使用此值校验文件内容是否一致。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoBestFrameMd5;

    /**
     * @var array 本次核验流程的详细信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerificationDetailList;

    /**
     * @var string 视频流中采集的视频临时地址，下载有效时间10分钟，如果需要存储请及时下载。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoUrl;

    /**
     * @var string 视频流中采集的视频内容MD5散列值，可以使用此值校验文件内容是否一致。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoMd5;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ErrorCode 本次核验最终结果。0为核验通过，是同一人。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMsg 本次核验最终结果描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VideoBestFrameUrl 视频流中采集的最佳人脸照片临时地址，下载有效时间10分钟，如果需要存储请及时下载。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VideoBestFrameMd5 视频流中采集的最佳人脸照片内容MD5散列值，可以使用此值校验文件内容是否一致。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VerificationDetailList 本次核验流程的详细信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VideoUrl 视频流中采集的视频临时地址，下载有效时间10分钟，如果需要存储请及时下载。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VideoMd5 视频流中采集的视频内容MD5散列值，可以使用此值校验文件内容是否一致。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("VideoBestFrameUrl",$param) and $param["VideoBestFrameUrl"] !== null) {
            $this->VideoBestFrameUrl = $param["VideoBestFrameUrl"];
        }

        if (array_key_exists("VideoBestFrameMd5",$param) and $param["VideoBestFrameMd5"] !== null) {
            $this->VideoBestFrameMd5 = $param["VideoBestFrameMd5"];
        }

        if (array_key_exists("VerificationDetailList",$param) and $param["VerificationDetailList"] !== null) {
            $this->VerificationDetailList = [];
            foreach ($param["VerificationDetailList"] as $key => $value){
                $obj = new VerificationDetail();
                $obj->deserialize($value);
                array_push($this->VerificationDetailList, $obj);
            }
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("VideoMd5",$param) and $param["VideoMd5"] !== null) {
            $this->VideoMd5 = $param["VideoMd5"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
