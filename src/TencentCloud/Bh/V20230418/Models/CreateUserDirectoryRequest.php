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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserDirectory请求参数结构体
 *
 * @method integer getDirId() 获取目录id
 * @method void setDirId(integer $DirId) 设置目录id
 * @method string getDirName() 获取目录名称
 * @method void setDirName(string $DirName) 设置目录名称
 * @method array getUserOrgSet() 获取ioa分组信息
 * @method void setUserOrgSet(array $UserOrgSet) 设置ioa分组信息
 * @method integer getSource() 获取ioa关联用户源类型
 * @method void setSource(integer $Source) 设置ioa关联用户源类型
 * @method string getSourceName() 获取ioa关联用户源名称
 * @method void setSourceName(string $SourceName) 设置ioa关联用户源名称
 * @method integer getUserCount() 获取目录包含用户数
 * @method void setUserCount(integer $UserCount) 设置目录包含用户数
 */
class CreateUserDirectoryRequest extends AbstractModel
{
    /**
     * @var integer 目录id
     */
    public $DirId;

    /**
     * @var string 目录名称
     */
    public $DirName;

    /**
     * @var array ioa分组信息
     */
    public $UserOrgSet;

    /**
     * @var integer ioa关联用户源类型
     */
    public $Source;

    /**
     * @var string ioa关联用户源名称
     */
    public $SourceName;

    /**
     * @var integer 目录包含用户数
     */
    public $UserCount;

    /**
     * @param integer $DirId 目录id
     * @param string $DirName 目录名称
     * @param array $UserOrgSet ioa分组信息
     * @param integer $Source ioa关联用户源类型
     * @param string $SourceName ioa关联用户源名称
     * @param integer $UserCount 目录包含用户数
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
        if (array_key_exists("DirId",$param) and $param["DirId"] !== null) {
            $this->DirId = $param["DirId"];
        }

        if (array_key_exists("DirName",$param) and $param["DirName"] !== null) {
            $this->DirName = $param["DirName"];
        }

        if (array_key_exists("UserOrgSet",$param) and $param["UserOrgSet"] !== null) {
            $this->UserOrgSet = [];
            foreach ($param["UserOrgSet"] as $key => $value){
                $obj = new UserOrg();
                $obj->deserialize($value);
                array_push($this->UserOrgSet, $obj);
            }
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("UserCount",$param) and $param["UserCount"] !== null) {
            $this->UserCount = $param["UserCount"];
        }
    }
}
