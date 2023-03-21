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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 抄送信息
 *
 * @method string getMobile() 获取被抄送人手机号，大陆11位手机号
 * @method void setMobile(string $Mobile) 设置被抄送人手机号，大陆11位手机号
 * @method string getName() 获取被抄送人姓名
 * @method void setName(string $Name) 设置被抄送人姓名
 * @method integer getCcType() 获取被抄送人类型
0--个人. 1--员工
 * @method void setCcType(integer $CcType) 设置被抄送人类型
0--个人. 1--员工
 * @method integer getCcPermission() 获取被抄送人权限
0--可查看
1--可查看也可下载
 * @method void setCcPermission(integer $CcPermission) 设置被抄送人权限
0--可查看
1--可查看也可下载
 */
class CcInfo extends AbstractModel
{
    /**
     * @var string 被抄送人手机号，大陆11位手机号
     */
    public $Mobile;

    /**
     * @var string 被抄送人姓名
     */
    public $Name;

    /**
     * @var integer 被抄送人类型
0--个人. 1--员工
     */
    public $CcType;

    /**
     * @var integer 被抄送人权限
0--可查看
1--可查看也可下载
     */
    public $CcPermission;

    /**
     * @param string $Mobile 被抄送人手机号，大陆11位手机号
     * @param string $Name 被抄送人姓名
     * @param integer $CcType 被抄送人类型
0--个人. 1--员工
     * @param integer $CcPermission 被抄送人权限
0--可查看
1--可查看也可下载
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
        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CcType",$param) and $param["CcType"] !== null) {
            $this->CcType = $param["CcType"];
        }

        if (array_key_exists("CcPermission",$param) and $param["CcPermission"] !== null) {
            $this->CcPermission = $param["CcPermission"];
        }
    }
}
