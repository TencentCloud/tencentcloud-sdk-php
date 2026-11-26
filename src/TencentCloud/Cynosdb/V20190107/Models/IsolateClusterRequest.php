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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IsolateCluster请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getDbType() 获取<p>该参数已废用</p>
 * @method void setDbType(string $DbType) 设置<p>该参数已废用</p>
 * @method array getIsolateReasonTypes() 获取<p>实例退还原因类型</p>
 * @method void setIsolateReasonTypes(array $IsolateReasonTypes) 设置<p>实例退还原因类型</p>
 * @method string getIsolateReason() 获取<p>实例退还原因补充</p>
 * @method void setIsolateReason(string $IsolateReason) 设置<p>实例退还原因补充</p>
 * @method boolean getSaveBackup() 获取<p>保留备份,true-保留（会产生费用）</p>
 * @method void setSaveBackup(boolean $SaveBackup) 设置<p>保留备份,true-保留（会产生费用）</p>
 * @method boolean getImmediateRecycleRo() 获取<p>立即彻底删除RO实例</p>
 * @method void setImmediateRecycleRo(boolean $ImmediateRecycleRo) 设置<p>立即彻底删除RO实例</p>
 */
class IsolateClusterRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>该参数已废用</p>
     */
    public $DbType;

    /**
     * @var array <p>实例退还原因类型</p>
     */
    public $IsolateReasonTypes;

    /**
     * @var string <p>实例退还原因补充</p>
     */
    public $IsolateReason;

    /**
     * @var boolean <p>保留备份,true-保留（会产生费用）</p>
     */
    public $SaveBackup;

    /**
     * @var boolean <p>立即彻底删除RO实例</p>
     */
    public $ImmediateRecycleRo;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $DbType <p>该参数已废用</p>
     * @param array $IsolateReasonTypes <p>实例退还原因类型</p>
     * @param string $IsolateReason <p>实例退还原因补充</p>
     * @param boolean $SaveBackup <p>保留备份,true-保留（会产生费用）</p>
     * @param boolean $ImmediateRecycleRo <p>立即彻底删除RO实例</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("IsolateReasonTypes",$param) and $param["IsolateReasonTypes"] !== null) {
            $this->IsolateReasonTypes = $param["IsolateReasonTypes"];
        }

        if (array_key_exists("IsolateReason",$param) and $param["IsolateReason"] !== null) {
            $this->IsolateReason = $param["IsolateReason"];
        }

        if (array_key_exists("SaveBackup",$param) and $param["SaveBackup"] !== null) {
            $this->SaveBackup = $param["SaveBackup"];
        }

        if (array_key_exists("ImmediateRecycleRo",$param) and $param["ImmediateRecycleRo"] !== null) {
            $this->ImmediateRecycleRo = $param["ImmediateRecycleRo"];
        }
    }
}
