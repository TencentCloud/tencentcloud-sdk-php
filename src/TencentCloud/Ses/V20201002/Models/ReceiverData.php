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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 收件人列表数据类型
 *
 * @method integer getReceiverId() 获取收件人列表ID
 * @method void setReceiverId(integer $ReceiverId) 设置收件人列表ID
 * @method string getReceiversName() 获取收件人列表名称
 * @method void setReceiversName(string $ReceiversName) 设置收件人列表名称
 * @method integer getCount() 获取收件人地址总数
 * @method void setCount(integer $Count) 设置收件人地址总数
 * @method string getDesc() 获取收件人列表描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置收件人列表描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReceiversStatus() 获取列表状态(1 待上传 2 上传中 3 上传完成)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiversStatus(integer $ReceiversStatus) 设置列表状态(1 待上传 2 上传中 3 上传完成)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间,如:2021-09-28 16:40:35
 * @method void setCreateTime(string $CreateTime) 设置创建时间,如:2021-09-28 16:40:35
 */
class ReceiverData extends AbstractModel
{
    /**
     * @var integer 收件人列表ID
     */
    public $ReceiverId;

    /**
     * @var string 收件人列表名称
     */
    public $ReceiversName;

    /**
     * @var integer 收件人地址总数
     */
    public $Count;

    /**
     * @var string 收件人列表描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var integer 列表状态(1 待上传 2 上传中 3 上传完成)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiversStatus;

    /**
     * @var string 创建时间,如:2021-09-28 16:40:35
     */
    public $CreateTime;

    /**
     * @param integer $ReceiverId 收件人列表ID
     * @param string $ReceiversName 收件人列表名称
     * @param integer $Count 收件人地址总数
     * @param string $Desc 收件人列表描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReceiversStatus 列表状态(1 待上传 2 上传中 3 上传完成)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间,如:2021-09-28 16:40:35
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
        if (array_key_exists("ReceiverId",$param) and $param["ReceiverId"] !== null) {
            $this->ReceiverId = $param["ReceiverId"];
        }

        if (array_key_exists("ReceiversName",$param) and $param["ReceiversName"] !== null) {
            $this->ReceiversName = $param["ReceiversName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ReceiversStatus",$param) and $param["ReceiversStatus"] !== null) {
            $this->ReceiversStatus = $param["ReceiversStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
