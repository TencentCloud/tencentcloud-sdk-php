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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时间戳防盗链模式 D 配置
时间戳防盗链模式 D 的访问 URL 格式为：http://DomainName/FileName?sign=md5hash&t=timestamp
其中 timestamp 为十进制或十六进制 UNIX 时间戳；
md5hash：MD5（自定义密钥 + 文件路径 + timestamp）
 *
 * @method string getSecretKey() 获取计算签名的密钥
仅允许大小写字母与数字，长度 6~32 位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretKey(string $SecretKey) 设置计算签名的密钥
仅允许大小写字母与数字，长度 6~32 位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取签名过期时间设置
单位为秒，最大可设置为 630720000
 * @method void setExpireTime(integer $ExpireTime) 设置签名过期时间设置
单位为秒，最大可设置为 630720000
 * @method array getFileExtensions() 获取鉴权/不做鉴权的文件扩展名列表设置
如果包含字符 *  则表示所有文件
 * @method void setFileExtensions(array $FileExtensions) 设置鉴权/不做鉴权的文件扩展名列表设置
如果包含字符 *  则表示所有文件
 * @method string getFilterType() 获取whitelist：白名单，表示对除了 FileExtensions 列表之外的所有类型进行鉴权
blacklist：黑名单，表示仅对 FileExtensions 中的类型进行鉴权
 * @method void setFilterType(string $FilterType) 设置whitelist：白名单，表示对除了 FileExtensions 列表之外的所有类型进行鉴权
blacklist：黑名单，表示仅对 FileExtensions 中的类型进行鉴权
 * @method string getSignParam() 获取签名参数名设置
仅允许大小写字母、数字或下划线，长度 1~100 位，不能以数字开头
 * @method void setSignParam(string $SignParam) 设置签名参数名设置
仅允许大小写字母、数字或下划线，长度 1~100 位，不能以数字开头
 * @method string getTimeParam() 获取时间戳参数名设置
仅允许大小写字母、数字或下划线，长度 1~100 位，不能以数字开头
 * @method void setTimeParam(string $TimeParam) 设置时间戳参数名设置
仅允许大小写字母、数字或下划线，长度 1~100 位，不能以数字开头
 * @method string getTimeFormat() 获取时间戳进制设置
dec：十进制
hex：十六进制
 * @method void setTimeFormat(string $TimeFormat) 设置时间戳进制设置
dec：十进制
hex：十六进制
 * @method string getBackupSecretKey() 获取计算签名的备用密钥
仅允许大小写字母与数字，长度 6~32 位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupSecretKey(string $BackupSecretKey) 设置计算签名的备用密钥
仅允许大小写字母与数字，长度 6~32 位
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuthenticationTypeD extends AbstractModel
{
    /**
     * @var string 计算签名的密钥
仅允许大小写字母与数字，长度 6~32 位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretKey;

    /**
     * @var integer 签名过期时间设置
单位为秒，最大可设置为 630720000
     */
    public $ExpireTime;

    /**
     * @var array 鉴权/不做鉴权的文件扩展名列表设置
如果包含字符 *  则表示所有文件
     */
    public $FileExtensions;

    /**
     * @var string whitelist：白名单，表示对除了 FileExtensions 列表之外的所有类型进行鉴权
blacklist：黑名单，表示仅对 FileExtensions 中的类型进行鉴权
     */
    public $FilterType;

    /**
     * @var string 签名参数名设置
仅允许大小写字母、数字或下划线，长度 1~100 位，不能以数字开头
     */
    public $SignParam;

    /**
     * @var string 时间戳参数名设置
仅允许大小写字母、数字或下划线，长度 1~100 位，不能以数字开头
     */
    public $TimeParam;

    /**
     * @var string 时间戳进制设置
dec：十进制
hex：十六进制
     */
    public $TimeFormat;

    /**
     * @var string 计算签名的备用密钥
仅允许大小写字母与数字，长度 6~32 位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupSecretKey;

    /**
     * @param string $SecretKey 计算签名的密钥
仅允许大小写字母与数字，长度 6~32 位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime 签名过期时间设置
单位为秒，最大可设置为 630720000
     * @param array $FileExtensions 鉴权/不做鉴权的文件扩展名列表设置
如果包含字符 *  则表示所有文件
     * @param string $FilterType whitelist：白名单，表示对除了 FileExtensions 列表之外的所有类型进行鉴权
blacklist：黑名单，表示仅对 FileExtensions 中的类型进行鉴权
     * @param string $SignParam 签名参数名设置
仅允许大小写字母、数字或下划线，长度 1~100 位，不能以数字开头
     * @param string $TimeParam 时间戳参数名设置
仅允许大小写字母、数字或下划线，长度 1~100 位，不能以数字开头
     * @param string $TimeFormat 时间戳进制设置
dec：十进制
hex：十六进制
     * @param string $BackupSecretKey 计算签名的备用密钥
仅允许大小写字母与数字，长度 6~32 位
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("FileExtensions",$param) and $param["FileExtensions"] !== null) {
            $this->FileExtensions = $param["FileExtensions"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("SignParam",$param) and $param["SignParam"] !== null) {
            $this->SignParam = $param["SignParam"];
        }

        if (array_key_exists("TimeParam",$param) and $param["TimeParam"] !== null) {
            $this->TimeParam = $param["TimeParam"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("BackupSecretKey",$param) and $param["BackupSecretKey"] !== null) {
            $this->BackupSecretKey = $param["BackupSecretKey"];
        }
    }
}
