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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos访问权限信息
 *
 * @method string getAccessUin() 获取可访问账号uin
 * @method void setAccessUin(string $AccessUin) 设置可访问账号uin
 * @method string getAccessUid() 获取可访问账号uid
 * @method void setAccessUid(string $AccessUid) 设置可访问账号uid
 * @method string getNickName() 获取昵称
 * @method void setNickName(string $NickName) 设置昵称
 * @method integer getIdentity() 获取身份标识 
1 主账号
2 子账号
 * @method void setIdentity(integer $Identity) 设置身份标识 
1 主账号
2 子账号
 * @method string getMainNickName() 获取所属主账号名称
 * @method void setMainNickName(string $MainNickName) 设置所属主账号名称
 * @method array getAkList() 获取可访问ak列表
 * @method void setAkList(array $AkList) 设置可访问ak列表
 * @method integer getCamPolicyCount() 获取可访问权限数
 * @method void setCamPolicyCount(integer $CamPolicyCount) 设置可访问权限数
 * @method integer getUpdateTime() 获取修改时间Unix时间单位毫秒
 * @method void setUpdateTime(integer $UpdateTime) 设置修改时间Unix时间单位毫秒
 */
class CosAccessInfo extends AbstractModel
{
    /**
     * @var string 可访问账号uin
     */
    public $AccessUin;

    /**
     * @var string 可访问账号uid
     */
    public $AccessUid;

    /**
     * @var string 昵称
     */
    public $NickName;

    /**
     * @var integer 身份标识 
1 主账号
2 子账号
     */
    public $Identity;

    /**
     * @var string 所属主账号名称
     */
    public $MainNickName;

    /**
     * @var array 可访问ak列表
     */
    public $AkList;

    /**
     * @var integer 可访问权限数
     */
    public $CamPolicyCount;

    /**
     * @var integer 修改时间Unix时间单位毫秒
     */
    public $UpdateTime;

    /**
     * @param string $AccessUin 可访问账号uin
     * @param string $AccessUid 可访问账号uid
     * @param string $NickName 昵称
     * @param integer $Identity 身份标识 
1 主账号
2 子账号
     * @param string $MainNickName 所属主账号名称
     * @param array $AkList 可访问ak列表
     * @param integer $CamPolicyCount 可访问权限数
     * @param integer $UpdateTime 修改时间Unix时间单位毫秒
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
        if (array_key_exists("AccessUin",$param) and $param["AccessUin"] !== null) {
            $this->AccessUin = $param["AccessUin"];
        }

        if (array_key_exists("AccessUid",$param) and $param["AccessUid"] !== null) {
            $this->AccessUid = $param["AccessUid"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Identity",$param) and $param["Identity"] !== null) {
            $this->Identity = $param["Identity"];
        }

        if (array_key_exists("MainNickName",$param) and $param["MainNickName"] !== null) {
            $this->MainNickName = $param["MainNickName"];
        }

        if (array_key_exists("AkList",$param) and $param["AkList"] !== null) {
            $this->AkList = $param["AkList"];
        }

        if (array_key_exists("CamPolicyCount",$param) and $param["CamPolicyCount"] !== null) {
            $this->CamPolicyCount = $param["CamPolicyCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
