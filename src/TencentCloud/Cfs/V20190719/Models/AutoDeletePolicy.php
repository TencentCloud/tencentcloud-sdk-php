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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自动删除策略配置信息
 *
 * @method string getPolicyId() 获取<p>策略 ID</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>策略 ID</p>
 * @method string getFileSystemId() 获取<p>文件系统Id</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统Id</p>
 * @method string getPolicyName() 获取<p>自动清理策略名称</p>
 * @method void setPolicyName(string $PolicyName) 设置<p>自动清理策略名称</p>
 * @method array getPaths() 获取<p>待清理的路径</p>
 * @method void setPaths(array $Paths) 设置<p>待清理的路径</p>
 * @method string getStatus() 获取<p>自动清理策略状态</p><p>枚举值：</p><ul><li>enabling： 启用中</li><li>enabled： 已启用</li><li>disabling： 禁用中</li><li>disabed： 已禁用</li><li>deleting： 删除中</li><li>failed： 失败</li><li>creating： 创建中</li><li>updating： 修改中</li></ul>
 * @method void setStatus(string $Status) 设置<p>自动清理策略状态</p><p>枚举值：</p><ul><li>enabling： 启用中</li><li>enabled： 已启用</li><li>disabling： 禁用中</li><li>disabed： 已禁用</li><li>deleting： 删除中</li><li>failed： 失败</li><li>creating： 创建中</li><li>updating： 修改中</li></ul>
 * @method string getCreateTime() 获取<p>清理策略创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>清理策略创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getUpdateTime() 获取<p>策略更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>策略更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getRegion() 获取<p>策略所属地域</p>
 * @method void setRegion(string $Region) 设置<p>策略所属地域</p>
 * @method string getErrMsg() 获取<p>错误信息</p>
 * @method void setErrMsg(string $ErrMsg) 设置<p>错误信息</p>
 */
class AutoDeletePolicy extends AbstractModel
{
    /**
     * @var string <p>策略 ID</p>
     */
    public $PolicyId;

    /**
     * @var string <p>文件系统Id</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>自动清理策略名称</p>
     */
    public $PolicyName;

    /**
     * @var array <p>待清理的路径</p>
     */
    public $Paths;

    /**
     * @var string <p>自动清理策略状态</p><p>枚举值：</p><ul><li>enabling： 启用中</li><li>enabled： 已启用</li><li>disabling： 禁用中</li><li>disabed： 已禁用</li><li>deleting： 删除中</li><li>failed： 失败</li><li>creating： 创建中</li><li>updating： 修改中</li></ul>
     */
    public $Status;

    /**
     * @var string <p>清理策略创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @var string <p>策略更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>策略所属地域</p>
     */
    public $Region;

    /**
     * @var string <p>错误信息</p>
     */
    public $ErrMsg;

    /**
     * @param string $PolicyId <p>策略 ID</p>
     * @param string $FileSystemId <p>文件系统Id</p>
     * @param string $PolicyName <p>自动清理策略名称</p>
     * @param array $Paths <p>待清理的路径</p>
     * @param string $Status <p>自动清理策略状态</p><p>枚举值：</p><ul><li>enabling： 启用中</li><li>enabled： 已启用</li><li>disabling： 禁用中</li><li>disabed： 已禁用</li><li>deleting： 删除中</li><li>failed： 失败</li><li>creating： 创建中</li><li>updating： 修改中</li></ul>
     * @param string $CreateTime <p>清理策略创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $UpdateTime <p>策略更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $Region <p>策略所属地域</p>
     * @param string $ErrMsg <p>错误信息</p>
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
