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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC 人脸信息
 *
 * @method string getSessionId() 获取主体 ID。需自行记录下返回的主体 ID。
 * @method void setSessionId(string $SessionId) 设置主体 ID。需自行记录下返回的主体 ID。
 * @method array getFaceInfoList() 获取人脸信息列表。
 * @method void setFaceInfoList(array $FaceInfoList) 设置人脸信息列表。
 */
class AigcFaceInfo extends AbstractModel
{
    /**
     * @var string 主体 ID。需自行记录下返回的主体 ID。
     */
    public $SessionId;

    /**
     * @var array 人脸信息列表。
     */
    public $FaceInfoList;

    /**
     * @param string $SessionId 主体 ID。需自行记录下返回的主体 ID。
     * @param array $FaceInfoList 人脸信息列表。
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("FaceInfoList",$param) and $param["FaceInfoList"] !== null) {
            $this->FaceInfoList = [];
            foreach ($param["FaceInfoList"] as $key => $value){
                $obj = new AigcFaceIdentityInfo();
                $obj->deserialize($value);
                array_push($this->FaceInfoList, $obj);
            }
        }
    }
}
