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
 * ModifyUserDirectory请求参数结构体
 *
 * @method integer getId() 获取<p>目录id</p>
 * @method void setId(integer $Id) 设置<p>目录id</p>
 * @method array getUserOrgSet() 获取<p>ioa分组信息</p>
 * @method void setUserOrgSet(array $UserOrgSet) 设置<p>ioa分组信息</p>
 * @method boolean getAutoSync() 获取<p>是否开启自动同步</p>
 * @method void setAutoSync(boolean $AutoSync) 设置<p>是否开启自动同步</p>
 * @method string getSyncCron() 获取<p>同步周期（5段式 crontab 表达式）</p>
 * @method void setSyncCron(string $SyncCron) 设置<p>同步周期（5段式 crontab 表达式）</p>
 */
class ModifyUserDirectoryRequest extends AbstractModel
{
    /**
     * @var integer <p>目录id</p>
     */
    public $Id;

    /**
     * @var array <p>ioa分组信息</p>
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
     * @param integer $Id <p>目录id</p>
     * @param array $UserOrgSet <p>ioa分组信息</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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
    }
}
