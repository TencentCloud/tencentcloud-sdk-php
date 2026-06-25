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
 * 用户目录信息
 *
 * @method integer getId() 获取<p>目录id</p>
 * @method void setId(integer $Id) 设置<p>目录id</p>
 * @method integer getDirId() 获取<p>ioa目录id</p>
 * @method void setDirId(integer $DirId) 设置<p>ioa目录id</p>
 * @method string getDirName() 获取<p>ioa目录名称</p>
 * @method void setDirName(string $DirName) 设置<p>ioa目录名称</p>
 * @method integer getSource() 获取<p>ioa关联用户源类型</p>
 * @method void setSource(integer $Source) 设置<p>ioa关联用户源类型</p>
 * @method string getSourceName() 获取<p>ioa关联用户源名称</p>
 * @method void setSourceName(string $SourceName) 设置<p>ioa关联用户源名称</p>
 * @method integer getUserTotal() 获取<p>目录包含用户数</p>
 * @method void setUserTotal(integer $UserTotal) 设置<p>目录包含用户数</p>
 * @method string getCreateTime() 获取<p>目录接入时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>目录接入时间</p>
 * @method array getUserOrgSet() 获取<p>目录下的组织细节信息</p>
 * @method void setUserOrgSet(array $UserOrgSet) 设置<p>目录下的组织细节信息</p>
 * @method boolean getAutoSync() 获取<p>是否开启自动同步</p>
 * @method void setAutoSync(boolean $AutoSync) 设置<p>是否开启自动同步</p>
 * @method string getSyncCron() 获取<p>同步周期（5段式 crontab 表达式）</p>
 * @method void setSyncCron(string $SyncCron) 设置<p>同步周期（5段式 crontab 表达式）</p>
 * @method string getNextSyncTime() 获取<p>下次同步时间</p><p>参数格式：2026-06-05T11:30:00+08:00</p>
 * @method void setNextSyncTime(string $NextSyncTime) 设置<p>下次同步时间</p><p>参数格式：2026-06-05T11:30:00+08:00</p>
 */
class UserDirectory extends AbstractModel
{
    /**
     * @var integer <p>目录id</p>
     */
    public $Id;

    /**
     * @var integer <p>ioa目录id</p>
     */
    public $DirId;

    /**
     * @var string <p>ioa目录名称</p>
     */
    public $DirName;

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
    public $UserTotal;

    /**
     * @var string <p>目录接入时间</p>
     */
    public $CreateTime;

    /**
     * @var array <p>目录下的组织细节信息</p>
     */
    public $UserOrgSet;

    /**
     * @var boolean <p>是否开启自动同步</p>
     */
    public $AutoSync;

    /**
     * @var string <p>同步周期（5段式 crontab 表达式）</p>
     */
    public $SyncCron;

    /**
     * @var string <p>下次同步时间</p><p>参数格式：2026-06-05T11:30:00+08:00</p>
     */
    public $NextSyncTime;

    /**
     * @param integer $Id <p>目录id</p>
     * @param integer $DirId <p>ioa目录id</p>
     * @param string $DirName <p>ioa目录名称</p>
     * @param integer $Source <p>ioa关联用户源类型</p>
     * @param string $SourceName <p>ioa关联用户源名称</p>
     * @param integer $UserTotal <p>目录包含用户数</p>
     * @param string $CreateTime <p>目录接入时间</p>
     * @param array $UserOrgSet <p>目录下的组织细节信息</p>
     * @param boolean $AutoSync <p>是否开启自动同步</p>
     * @param string $SyncCron <p>同步周期（5段式 crontab 表达式）</p>
     * @param string $NextSyncTime <p>下次同步时间</p><p>参数格式：2026-06-05T11:30:00+08:00</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DirId",$param) and $param["DirId"] !== null) {
            $this->DirId = $param["DirId"];
        }

        if (array_key_exists("DirName",$param) and $param["DirName"] !== null) {
            $this->DirName = $param["DirName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("UserTotal",$param) and $param["UserTotal"] !== null) {
            $this->UserTotal = $param["UserTotal"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserOrgSet",$param) and $param["UserOrgSet"] !== null) {
            $this->UserOrgSet = [];
            foreach ($param["UserOrgSet"] as $key => $value){
                $obj = new UserOrg();
                $obj->deserialize($value);
                array_push($this->UserOrgSet, $obj);
            }
        }

        if (array_key_exists("AutoSync",$param) and $param["AutoSync"] !== null) {
            $this->AutoSync = $param["AutoSync"];
        }

        if (array_key_exists("SyncCron",$param) and $param["SyncCron"] !== null) {
            $this->SyncCron = $param["SyncCron"];
        }

        if (array_key_exists("NextSyncTime",$param) and $param["NextSyncTime"] !== null) {
            $this->NextSyncTime = $param["NextSyncTime"];
        }
    }
}
