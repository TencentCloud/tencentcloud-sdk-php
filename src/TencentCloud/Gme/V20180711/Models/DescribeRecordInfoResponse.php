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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecordInfo返回参数结构体
 *
 * @method array getRecordInfo() 获取录制信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordInfo(array $RecordInfo) 设置录制信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordMode() 获取录制类型：1代表单流 2代表混流 3代表单流和混流。
 * @method void setRecordMode(integer $RecordMode) 设置录制类型：1代表单流 2代表混流 3代表单流和混流。
 * @method string getRoomId() 获取房间ID。
 * @method void setRoomId(string $RoomId) 设置房间ID。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRecordInfoResponse extends AbstractModel
{
    /**
     * @var array 录制信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordInfo;

    /**
     * @var integer 录制类型：1代表单流 2代表混流 3代表单流和混流。
     */
    public $RecordMode;

    /**
     * @var string 房间ID。
     */
    public $RoomId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $RecordInfo 录制信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordMode 录制类型：1代表单流 2代表混流 3代表单流和混流。
     * @param string $RoomId 房间ID。
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
        if (array_key_exists("RecordInfo",$param) and $param["RecordInfo"] !== null) {
            $this->RecordInfo = [];
            foreach ($param["RecordInfo"] as $key => $value){
                $obj = new RecordInfo();
                $obj->deserialize($value);
                array_push($this->RecordInfo, $obj);
            }
        }

        if (array_key_exists("RecordMode",$param) and $param["RecordMode"] !== null) {
            $this->RecordMode = $param["RecordMode"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
