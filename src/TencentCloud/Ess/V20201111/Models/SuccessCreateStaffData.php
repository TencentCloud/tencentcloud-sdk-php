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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建员工的成功数据
 *
 * @method string getDisplayName() 获取员工名
 * @method void setDisplayName(string $DisplayName) 设置员工名
 * @method string getMobile() 获取员工手机号
 * @method void setMobile(string $Mobile) 设置员工手机号
 * @method string getUserId() 获取员工在电子签平台的id
 * @method void setUserId(string $UserId) 设置员工在电子签平台的id
 * @method string getNote() 获取提示，当创建已存在未实名用户时，改字段有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNote(string $Note) 设置提示，当创建已存在未实名用户时，改字段有值
注意：此字段可能返回 null，表示取不到有效值。
 */
class SuccessCreateStaffData extends AbstractModel
{
    /**
     * @var string 员工名
     */
    public $DisplayName;

    /**
     * @var string 员工手机号
     */
    public $Mobile;

    /**
     * @var string 员工在电子签平台的id
     */
    public $UserId;

    /**
     * @var string 提示，当创建已存在未实名用户时，改字段有值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Note;

    /**
     * @param string $DisplayName 员工名
     * @param string $Mobile 员工手机号
     * @param string $UserId 员工在电子签平台的id
     * @param string $Note 提示，当创建已存在未实名用户时，改字段有值
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
