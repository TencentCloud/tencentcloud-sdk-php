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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 添加的团队成员信息
 *
 * @method string getMemberId() 获取团队成员 ID。
 * @method void setMemberId(string $MemberId) 设置团队成员 ID。
 * @method string getRemark() 获取团队成员备注。
 * @method void setRemark(string $Remark) 设置团队成员备注。
 */
class AddMemberInfo extends AbstractModel
{
    /**
     * @var string 团队成员 ID。
     */
    public $MemberId;

    /**
     * @var string 团队成员备注。
     */
    public $Remark;

    /**
     * @param string $MemberId 团队成员 ID。
     * @param string $Remark 团队成员备注。
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
        if (array_key_exists('MemberId',$param) and $param['MemberId'] !== null) {
            $this->MemberId = $param['MemberId'];
        }

        if (array_key_exists('Remark',$param) and $param['Remark'] !== null) {
            $this->Remark = $param['Remark'];
        }
    }
}
