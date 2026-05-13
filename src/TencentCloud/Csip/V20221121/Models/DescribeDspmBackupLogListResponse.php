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
 * DescribeDspmBackupLogList返回参数结构体
 *
 * @method integer getTotalCount() 获取<p>总共多少条</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>总共多少条</p>
 * @method array getList() 获取<p>备份日志列表</p>
 * @method void setList(array $List) 设置<p>备份日志列表</p>
 * @method boolean getHasRestoringTask() 获取<p>当前是否存在恢复中任务</p>
 * @method void setHasRestoringTask(boolean $HasRestoringTask) 设置<p>当前是否存在恢复中任务</p>
 * @method integer getMaxRestoreSizeInGB() 获取<p>最大恢复空间</p>
 * @method void setMaxRestoreSizeInGB(integer $MaxRestoreSizeInGB) 设置<p>最大恢复空间</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDspmBackupLogListResponse extends AbstractModel
{
    /**
     * @var integer <p>总共多少条</p>
     */
    public $TotalCount;

    /**
     * @var array <p>备份日志列表</p>
     */
    public $List;

    /**
     * @var boolean <p>当前是否存在恢复中任务</p>
     */
    public $HasRestoringTask;

    /**
     * @var integer <p>最大恢复空间</p>
     */
    public $MaxRestoreSizeInGB;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount <p>总共多少条</p>
     * @param array $List <p>备份日志列表</p>
     * @param boolean $HasRestoringTask <p>当前是否存在恢复中任务</p>
     * @param integer $MaxRestoreSizeInGB <p>最大恢复空间</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new BackupLog();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("HasRestoringTask",$param) and $param["HasRestoringTask"] !== null) {
            $this->HasRestoringTask = $param["HasRestoringTask"];
        }

        if (array_key_exists("MaxRestoreSizeInGB",$param) and $param["MaxRestoreSizeInGB"] !== null) {
            $this->MaxRestoreSizeInGB = $param["MaxRestoreSizeInGB"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
