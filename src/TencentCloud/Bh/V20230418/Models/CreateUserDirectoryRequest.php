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
 * @method integer getDirId() 获取<p>目录id</p>
 * @method void setDirId(integer $DirId) 设置<p>目录id</p>
 * @method string getDirName() 获取<p>目录名称</p>
 * @method void setDirName(string $DirName) 设置<p>目录名称</p>
 * @method array getUserOrgSet() 获取<p>ioa分组信息</p>
 * @method void setUserOrgSet(array $UserOrgSet) 设置<p>ioa分组信息</p>
 * @method integer getSource() 获取<p>ioa关联用户源类型</p>
 * @method void setSource(integer $Source) 设置<p>ioa关联用户源类型</p>
 * @method string getSourceName() 获取<p>ioa关联用户源名称</p>
 * @method void setSourceName(string $SourceName) 设置<p>ioa关联用户源名称</p>
 * @method integer getUserCount() 获取<p>目录包含用户数</p>
 * @method void setUserCount(integer $UserCount) 设置<p>目录包含用户数</p>
 * @method boolean getAutoSync() 获取<p>是否开启自动同步</p>
 * @method void setAutoSync(boolean $AutoSync) 设置<p>是否开启自动同步</p>
 * @method string getSyncCron() 获取<p>同步周期（5段式 crontab 表达式）</p>
 * @method void setSyncCron(string $SyncCron) 设置<p>同步周期（5段式 crontab 表达式）</p>
 */
class CreateUserDirectoryRequest extends AbstractModel
{
    /**
     * @var integer <p>目录id</p>
     */
    public $DirId;

    /**
     * @var string <p>目录名称</p>
     */
    public $DirName;

    /**
     * @var array <p>ioa分组信息</p>
     */
    public $UserOrgSet;

    /**
     * @var integer <p>ioa关联用户源类型</p>
     */
    public $Source;

    /**
     * @var string <p>ioa关联用户源名称</p>
     */
    public $SourceName;

    /**
     * @var integer <p>目录包含用户数</p>
     */
    public $UserCount;

    /**
     * @var boolean <p>是否开启自动同步</p>
     */
    public $AutoSync;

    /**
     * @var string <p>同步周期（5段式 crontab 表达式）</p>
     */
    public $SyncCron;

    /**
     * @param integer $DirId <p>目录id</p>
     * @param string $DirName <p>目录名称</p>
     * @param array $UserOrgSet <p>ioa分组信息</p>
     * @param integer $Source <p>ioa关联用户源类型</p>
     * @param string $SourceName <p>ioa关联用户源名称</p>
     * @param integer $UserCount <p>目录包含用户数</p>
     * @param boolean $AutoSync <p>是否开启自动同步</p>
     * @param string $SyncCron <p>同步周期（5段式 crontab 表达式）</p>
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

        if (array_key_exists("AutoSync",$param) and $param["AutoSync"] !== null) {
            $this->AutoSync = $param["AutoSync"];
        }

        if (array_key_exists("SyncCron",$param) and $param["SyncCron"] !== null) {
            $this->SyncCron = $param["SyncCron"];
        }
    }
}
