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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMetaTable请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群唯一id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群唯一id</p>
 * @method string getTableId() 获取<p>元数据表唯一id</p>
 * @method void setTableId(string $TableId) 设置<p>元数据表唯一id</p>
 * @method string getSqlCode() 获取<p>SQL</p><p>参数格式：base64加密</p>
 * @method void setSqlCode(string $SqlCode) 设置<p>SQL</p><p>参数格式：base64加密</p>
 * @method string getFlinkVersion() 获取<p>Flink版本</p>
 * @method void setFlinkVersion(string $FlinkVersion) 设置<p>Flink版本</p>
 * @method string getWorkSpaceId() 获取<p>空间唯一id</p>
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置<p>空间唯一id</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 */
class ModifyMetaTableRequest extends AbstractModel
{
    /**
     * @var string <p>集群唯一id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>元数据表唯一id</p>
     */
    public $TableId;

    /**
     * @var string <p>SQL</p><p>参数格式：base64加密</p>
     */
    public $SqlCode;

    /**
     * @var string <p>Flink版本</p>
     */
    public $FlinkVersion;

    /**
     * @var string <p>空间唯一id</p>
     */
    public $WorkSpaceId;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @param string $ClusterId <p>集群唯一id</p>
     * @param string $TableId <p>元数据表唯一id</p>
     * @param string $SqlCode <p>SQL</p><p>参数格式：base64加密</p>
     * @param string $FlinkVersion <p>Flink版本</p>
     * @param string $WorkSpaceId <p>空间唯一id</p>
     * @param string $Remark <p>备注</p>
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

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("SqlCode",$param) and $param["SqlCode"] !== null) {
            $this->SqlCode = $param["SqlCode"];
        }

        if (array_key_exists("FlinkVersion",$param) and $param["FlinkVersion"] !== null) {
            $this->FlinkVersion = $param["FlinkVersion"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
