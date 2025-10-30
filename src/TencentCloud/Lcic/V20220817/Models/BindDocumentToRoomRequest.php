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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindDocumentToRoom请求参数结构体
 *
 * @method integer getRoomId() 获取房间ID。
 * @method void setRoomId(integer $RoomId) 设置房间ID。
 * @method string getDocumentId() 获取文档ID。
 * @method void setDocumentId(string $DocumentId) 设置文档ID。
 * @method integer getBindType() 获取绑定类型。后台可透传到客户端，默认为0。除以下例值外支持自定义该字段，并在前端实现相应业务逻辑，示例参考：
示例值：0，仅绑定课件到房间
示例值：1，绑定课件到房间后，默认展示课件
 * @method void setBindType(integer $BindType) 设置绑定类型。后台可透传到客户端，默认为0。除以下例值外支持自定义该字段，并在前端实现相应业务逻辑，示例参考：
示例值：0，仅绑定课件到房间
示例值：1，绑定课件到房间后，默认展示课件
 */
class BindDocumentToRoomRequest extends AbstractModel
{
    /**
     * @var integer 房间ID。
     */
    public $RoomId;

    /**
     * @var string 文档ID。
     */
    public $DocumentId;

    /**
     * @var integer 绑定类型。后台可透传到客户端，默认为0。除以下例值外支持自定义该字段，并在前端实现相应业务逻辑，示例参考：
示例值：0，仅绑定课件到房间
示例值：1，绑定课件到房间后，默认展示课件
     */
    public $BindType;

    /**
     * @param integer $RoomId 房间ID。
     * @param string $DocumentId 文档ID。
     * @param integer $BindType 绑定类型。后台可透传到客户端，默认为0。除以下例值外支持自定义该字段，并在前端实现相应业务逻辑，示例参考：
示例值：0，仅绑定课件到房间
示例值：1，绑定课件到房间后，默认展示课件
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("DocumentId",$param) and $param["DocumentId"] !== null) {
            $this->DocumentId = $param["DocumentId"];
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }
    }
}
